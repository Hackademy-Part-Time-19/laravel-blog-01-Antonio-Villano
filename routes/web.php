<?php

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

Route::get('/home', function () {
    return view('home',['random'=>'pincopallino']);
    
});
Route::get('/articoli', function () {
    return view('articoli',['titolo'=>'Questo è un titolo']);
});
Route::get('/chi_sono', function () {
    return view('chi_sono',['descrizione'=>'questa è una descrizione']);
});
