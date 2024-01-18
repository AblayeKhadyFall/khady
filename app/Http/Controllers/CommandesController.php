<?php

namespace App\Http\Controllers;

use App\Models\Commandes;
use App\Http\Requests\StoreCommandesRequest;
use App\Http\Requests\UpdateCommandesRequest;

class CommandesController extends Controller
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
        return view('commandes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCommandesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Commandes $commandes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Commandes $commandes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCommandesRequest $request, Commandes $commandes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Commandes $commandes)
    {
        //
    }
}
