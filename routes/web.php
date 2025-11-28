<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChirperController;

// Route::get('/', function () {
//     return view('home');
// })->name('home');

Route::get('/', [ChirperController::class, 'index'] )->name('home');
