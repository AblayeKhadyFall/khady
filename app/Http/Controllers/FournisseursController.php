<?php

namespace App\Http\Controllers;

use App\Models\Fournisseurs;
use App\Http\Requests\StoreFournisseursRequest;
use App\Http\Requests\UpdateFournisseursRequest;

class FournisseursController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('fournisseurs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFournisseursRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Fournisseurs $fournisseurs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fournisseurs $fournisseurs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFournisseursRequest $request, Fournisseurs $fournisseurs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fournisseurs $fournisseurs)
    {
        //
    }
}
