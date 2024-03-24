<?php

namespace App\Http\Controllers;

use App\Models\orari;
use App\Http\Requests\StoreorariRequest;
use App\Http\Requests\UpdateorariRequest;

class OrariController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return orari::with('prenotazionis')->get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreorariRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(orari $orari)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(orari $orari)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateorariRequest $request, orari $orari)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(orari $orari)
    {
        //
    }
}
