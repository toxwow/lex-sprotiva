<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('user.index');
})->name('home');


Route::get('/sportowcy', function () {
    return view('user.sportowcy');
})->name('sportowcy');

Route::get('/zwiazki-kluby', function () {
    return view('user.zwiazki');
})->name('zwiazki');

Route::get('/fitness', function () {
    return view('user.fitness');
})->name('fitness');

Route::get('/trenerzy-managerowie', function () {
    return view('user.trenerzy');
})->name('trenerzy');

Route::get('/organizatorzy', function () {
    return view('user.organizatorzy');
})->name('organizatorzy');


Route::get('/sponsorzy', function () {
    return view('user.sponsorzy');
})->name('sponsorzy');
