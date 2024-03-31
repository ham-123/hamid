<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    // Afficher la liste des clients
    public function index()
    {
        $clients = Client::all();
        return view('admin.clients.index', compact('clients'));
    }

    // Afficher le formulaire de création d'un nouveau client
    public function create()
    {
        return view('admin.clients.create');
    }

    // Enregistrer un nouveau client dans la base de données
    public function store(Request $request)
    {
        $request->validate([
            'nom_client' => 'required|string',
            'entreprise' => 'required|string',
            'commentaire' => 'required|string',
        ]);
    
        // Création du client
        Client::create($request->all());
    
        return redirect()->route('clients.index')->with('success', 'Client créé avec succès.');
    }

    // Afficher le formulaire de modification d'un client
    public function edit(Client $client)
    {
        return view('admin.clients.edit', compact('client'));
    }

    // Mettre à jour les informations d'un client dans la base de données
    public function update(Request $request, Client $client)
    {
        $request->validate([
            'nom_client' => 'required|string',
            'entreprise' => 'required|string',
            'commentaire' => 'required|string',
        ]);

        // Mettre à jour les données du client
        $client->update($request->all());

        // Rediriger vers la liste des clients dans l'interface d'administration
        return redirect()->route('clients.index')->with('success', 'Client mis à jour avec succès.');
    }

    // Supprimer un client de la base de données
    public function destroy(Client $client)
    {
        // Supprimer le client de la base de données
        $client->delete();

        return redirect()->route('clients.index')->with('success', 'Client supprimé avec succès.');
    }
}
