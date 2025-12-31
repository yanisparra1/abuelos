<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});
//prueba
Route::get('/create-pdf/{historia}', [HomeController::class, 'createPDF'])->name('createPDF');
