<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChirpController;

// Route::get('/', function () {
//     return view('home');
// })->name('home');

Route::get('/', [ChirpController::class, 'index'] )->name('home');
Route::get('/chirps', [ChirpController::class, 'store'])->name('store');