<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Education;

class EducationController extends Controller
{
    public function index() 
    {
        $educations = Education::all();
        return view('admin.education.index', compact('educations'),);
    }

    public function create()
    {
        return view('admin.education.create',);
    }

    public function store(Request $request){

    
        $request->validate([
        
            'diplome' => 'required',
            'universite' => 'required',
            'annee_obtention' => 'required',
            
        ]);

        Education::create($request->all());

        return redirect()->route('education.index')->with('success', 'Éducation ajoutée avec succès.');
    }

    public function edit(Education $education)
    {
        return view('admin.education.edit', compact('education'),);
    }

    public function update(Request $request, Education $education)
    {
        $request->validate([
            'diplome' => 'required',
            'universite' => 'required',
            'annee_obtention' => 'required',
        ]);

        $education->update($request->all());

        return redirect()->route('education.index')->with('success', 'Éducation mise à jour avec succès.');
    }

    public function destroy(Education $education)
    {
        $education->delete();

        return redirect()->route('education.index')->with('success', 'Éducation supprimée avec succès.');
    }
}
