<?php

namespace App\Http\Controllers;

use App\Models\attivita;
use App\Models\prenotazioni;
use App\Http\Requests\StoreprenotazioniRequest;
use App\Http\Requests\UpdateprenotazioniRequest;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class PrenotazioniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreprenotazioniRequest $request)
    {
        
    $request->validate([
        'stato' => 'required', 
        'attivita_id' => 'required',
        'orari_id' => 'required',
        
    ]);

    // Crea una nuova prenotazione con i dati forniti più l'id dell'utente autenticato
    $prenotazione = new prenotazioni([
        'stato' => $request->input('stato'),
        'attivita_id' => $request->input('attivita_id'),
        'orari_id' => $request->input('orari_id'),
    ]);

    // Salva la prenotazione nel database
    $prenotazione->save();

    // Ritorna una risposta, ad esempio reindirizza o ritorna un JSON
    return redirect()->route('percorso.dopo.prenotazione'); // Modifica con il tuo percorso desiderato
    }

    /*
     * Display the specified resource.
     */
    public function show(prenotazioni $prenotazioni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(prenotazioni $prenotazioni)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateprenotazioniRequest $request, prenotazioni $prenotazioni)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(prenotazioni $prenotazioni)
    {
        //
    }
}
