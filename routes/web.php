<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'home'])->name('home');
Route::get('/centro-estetico', [PublicController::class, 'centroEstetico'])->name('centro-estetico');
Route::get('/trattamenti', [PublicController::class, 'trattamenti'])->name('trattamenti');
Route::get('/nailArt', [PublicController::class, 'nailArt'])->name('nailArt');
Route::get('/contatti', [PublicController::class, 'contatti'])->name('contatti');

