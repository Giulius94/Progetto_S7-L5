<?php

namespace App\Http\Controllers;

use App\Models\attivita;
use App\Http\Requests\StoreattivitaRequest;
use App\Http\Requests\UpdateattivitaRequest;
use App\Models\orari;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class AttivitaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return Inertia::render('Attivita/AttivitaComponent', ['attivita' => attivita::with('oraris', 'prenotazionis', 'users')->get(), 'user' => Auth::user()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return Inertia::render('Attivita/CreateAttivitaComponent', ['user' => Auth::user()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreattivitaRequest $request)
    {
        $attivita = attivita::create($request->validate([
            'name' => ['required'],
            'description' => ['required'],
            'start_date' => ['required'],
            'end_date' => ['required'],
        ]));
        $orari = new orari([
            'orario_inizio' => $request->input('orario_inizio'), // Assicurati di avere un campo 'name' nel tuo form
            'orario_fine' => $request->input('orario_fine'), // Assicurati di avere un campo 'city' nel tuo form
        ]);
        $attivita->oraris()->save($orari);
        return to_route('attivita.index');
    }

    /**
     * Display the specified resource.
     */

   public function show(attivita $attivita,$id)
    {
        
        $attivita = Attivita::find($id)->load(['oraris', 'prenotazionis']);
        
        return Inertia::render('Attivita/DetailAttivitaComponent', [
            'attivita' => $attivita, 'user' => Auth::user(),
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(attivita $attivita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateattivitaRequest $request, attivita $attivita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(attivita $attivita)
    {
        //
    }
}
