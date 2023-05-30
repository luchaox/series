<?php

use App\Http\Controllers\SeriesController;
use App\Http\Controllers\TemporadaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/series', [SeriesController::class, 'index'])->name('list_series');
Route::get('/series/criar', [SeriesController::class, 'create'])->name('form_criar_serie');
Route::post('/series/criar', [SeriesController::class, 'store'])->name('series.store');
Route::delete('/series/{id}', [SeriesController::class, 'destroy']);
Route::get('/series/{idSerie}/temporadas', [TemporadaController::class, 'index'])->name('temporadas_list');