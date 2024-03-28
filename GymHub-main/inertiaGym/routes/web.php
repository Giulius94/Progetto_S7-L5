<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/attivita/create', [\App\Http\Controllers\AttivitaController::class, 'create'])->middleware(['auth', 'verified'])->name('attivita.create');
    Route::get('/prenotazioni/create', [\App\Http\Controllers\PrenotazioniController::class, 'create'])->middleware(['auth', 'verified'])->name('prenotazioni.create');
    Route::post('/prenotazioni', [\App\Http\Controllers\PrenotazioniController::class, 'store'])->middleware(['auth', 'verified'])->name('prenotazioni.store');
    Route::delete('/attivita/{id}', [\App\Http\Controllers\AttivitaController::class, 'destroy'])->middleware(['auth', 'verified'])->name('attivita.destroy');
    Route::post('/attivita', [\App\Http\Controllers\AttivitaController::class, 'store'])->middleware(['auth', 'verified'])->name('attivita.store');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/attivita', [\App\Http\Controllers\AttivitaController::class, 'index'])->name('attivita.index');
Route::get('/prenotazioni', [\App\Http\Controllers\PrenotazioniController::class, 'index'])->name('prenotazioni.index');

Route::get('/attivita/{id}', [\App\Http\Controllers\AttivitaController::class, 'show'])->name('attivita.show');

require __DIR__.'/auth.php';
