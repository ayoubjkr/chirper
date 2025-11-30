<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChirpController;

// Route::get('/', function () {
//     return view('home');
// })->name('home');

Route::get('/', [ChirpController::class, 'index'] )->name('home');
Route::post('/chirps', [ChirpController::class, 'store'])->name('store');
Route::get('/chirps/{chirp}/edit', [ChirpController::class, 'edit']);
Route::put('/chirps/{chirp}', [ChirpController::class, 'update']);
Route::delete('/chirps/{chirp}', [ChirpController::class, 'destroy']);

// Route::resource('chirps', ChirpController::class)
//     ->only(['store', 'edit', 'update', 'destroy']);
