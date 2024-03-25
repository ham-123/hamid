<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portfolio;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    // Afficher la liste des portfolios
    public function index()
    {
        $portfolios = Portfolio::all();
        return view('admin.portfolios.index', compact('portfolios'));
    }

    // Afficher le formulaire de création d'un nouveau portfolio
    public function create()
    {
        return view('admin.portfolios.create');
    }

    // Enregistrer un nouveau portfolio dans la base de données
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'titre' => 'required|string',
            'categorie' => 'required|string',
            'description' => 'required|string',
        ]);
    
        // Enregistrement de l'image
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/portfolios');
        } else {
            $imagePath = null;
        }
    
        // Création du portfolio
        Portfolio::create([
            'titre' => $request->input('titre'),
            'categorie' => $request->input('categorie'),
            'description' => $request->input('description'),
            'image' => $imagePath,
        ]);
    
        return redirect()->route('portfolios.index')->with('success', 'Portfolio créé avec succès.');
    }

    // Afficher le formulaire de modification d'un portfolio
    public function edit(Portfolio $portfolio)
    {
        return view('admin.portfolios.edit', compact('portfolio'));
    }

    // Mettre à jour les informations d'un portfolio dans la base de données
    public function update(Request $request, Portfolio $portfolio)
    {
        $request->validate([
            'titre' => 'required',
            'categorie' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            // Supprimer l'image existante du stockage
            Storage::delete($portfolio->image);

            // Enregistrer la nouvelle image dans le stockage
            $imagePath = $request->file('image')->store('public/portfolios');
        } else {
            // Utiliser le chemin de l'image existante
            $imagePath = $portfolio->image;
        }

        // Mettre à jour les données du portfolio
        $portfolio->update([
            'titre' => $request->titre,
            'categorie' => $request->categorie,
            'description' => $request->description,
            'image' => $imagePath,
        ]);

        // Rediriger vers la liste des portfolios dans l'interface d'administration
        return redirect()->route('portfolios.index')->with('success', 'Portfolio mis à jour avec succès.');
    }

    // Supprimer un portfolio de la base de données
    public function destroy(Portfolio $portfolio)
    {
        // Supprimer l'image du stockage
        Storage::delete($portfolio->image);

        // Supprimer le portfolio de la base de données
        $portfolio->delete();

        return redirect()->route('portfolios.index')->with('success', 'Portfolio supprimé avec succès.');
    }
}
