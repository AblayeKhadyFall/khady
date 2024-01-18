<?php

namespace App\Http\Controllers;

use App\Models\Produits;
use App\Http\Requests\StoreProduitsRequest;
use App\Http\Requests\UpdateProduitsRequest;
use Illuminate\Auth\Events\Validated;

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
        $validated =$request->Validate([
           'prix'=>'required',
           'poids'=>'required',
           'status'=>'required',
           'image'=>'required'


        ]);
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
    public function edit(Produits $produits)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProduitsRequest $request, Produits $produits)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produits $produits)
    {
        //
    }
}
