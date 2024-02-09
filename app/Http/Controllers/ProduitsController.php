<?php

namespace App\Http\Controllers;

use App\Models\Produits;
use App\Http\Requests\StoreProduitsRequest;
use App\Http\Requests\UpdateProduitsRequest;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class ProduitsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produits = Produits::all();
        return view('produits.index',compact('produits'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produits.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProduitsRequest $request)
    {
        // $validated =$request->Validate([
        //    'prix'=>'required',
        //    'poids'=>'required',
        //    'status'=>'required',
        //    'image'=>'required'


        // ]);

        $validated = $request->validated();

        //dd($validated);
        Produits::create($validated);
        return redirect()->route('produits.index')->with('success','UN POULET EST AJOUTE AVEC SUCCES!');

    }

    /**
     * Display the specified resource.
     */
    public function show(Produits $produits)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $produit = Produits::find($id);
        return view('produits.edit',compact('produit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updatec(UpdateProduitsRequest $request, Produits $produits)
    {
        $validated = $request->validate();
        $produits->update($validated);
        return redirect()->route('produits.index')->with('success','Ce produit a ete modifier avec succes !');
    }
    public function update(Request $request, $id)
    {
        // Valider les données reçues du formulaire
        $request->validate([
            'prix' => 'required|numeric',
            'poids' => 'required',
            'status' => 'required|integer',
            'image' => 'required|string',
        ]);

        // Trouver le produit à mettre à jour dans la base de données
        $produit = Produits::findOrFail($id);

        // Mettre à jour les champs du produit avec les données du formulaire
        $produit->prix = $request->input('prix');
        $produit->poids = $request->input('poids');
        $produit->status = $request->input('status');
        $produit->image = $request->input('image');

        // Sauvegarder les modifications apportées au produit
        $produit->save();

        // Rediriger vers la page des produits avec un message de succès
        return redirect()->route('produits.index')->with('success', 'Produit mis à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)

    {
        // $produits = $produits->produits ;
        // dd($produits);
        $produit = Produits::findOrFail($id);

        $produit->delete();
        return redirect()->route('produits.index')->with('success','Ce produit a ete supprime avec succes !');
    }
}
