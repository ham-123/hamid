<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Experience;

class ExperienceController extends Controller
{
    public function index() 
    {
        $experiences = Experience::all();
        return view('admin.experience.index', compact('experiences'));
    }

    public function create()
    {
        return view('admin.experience.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'poste' => 'required',
            'entreprise' => 'required',
            'description' => 'required',
            'annee_debut' => 'required',
            'annee_fin' => 'nullable',
        ]);

        Experience::create($request->all());

        return redirect()->route('experience.index')->with('success', 'Expérience ajoutée avec succès.');
    }

    public function edit(Experience $experience)
    {
        return view('admin.experience.edit', compact('experience'));
    }

    public function update(Request $request, Experience $experience)
    {
        $request->validate([
            'poste' => 'required',
            'entreprise' => 'required',
            'description' => 'required',
            'annee_debut' => 'required',
            'annee_fin' => 'nullable',
        ]);

        $experience->update($request->all());

        return redirect()->route('experience.index')->with('success', 'Expérience mise à jour avec succès.');
    }

    public function destroy(Experience $experience)
    {
        $experience->delete();

        return redirect()->route('experience.index')->with('success', 'Expérience supprimée avec succès.');
    }
}
