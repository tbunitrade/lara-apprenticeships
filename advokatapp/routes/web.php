<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/welcome', function () {
    return view('/welcome');
});

Route::get('/', function () {
    return view('/home');
});

Route::get('/team', function () {
    return view('/team');
});

Route::get('/practicts', function () {
    return view('/practicts');
});



Route::get('/goals', function () {
    return view('/goals');
});

Route::get('/freeservices', function () {
    return view('/freeservices');
});

Route::get('/aboutus', function () {
    return view('/aboutus');
});

Route::get('/contacts', function () {
    return view('/contacts');
});

Route::get('/advokat-po-kriminalnim-spravam', function () {
    return view('/advokat-po-kriminalnim-spravam');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
