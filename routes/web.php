<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FichierController;



Route::get('/administration', [FichierController::class, 'index'])->name('administration');
