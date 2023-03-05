<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostGuzzleController;

Route::get('posts',[PostGuzzleController::class,'index']);
Route::get('posts/store', [PostGuzzleController::class, 'store' ]);

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
    return view('/home-page');
});

Route::get('/about-us', function () {
    return view('/about-us-page');
});

Route::get('/team', function () {
    return view('/team-page');
});

Route::get('/practicts', function () {
    return view('/practicts-page');
});

Route::get('/clients', function () {
    return view('/clients-page');
});

Route::get('/dosyagnennya', function () {
    return view('/dosyagnennya-page');
});

Route::get('/contacts', function () {
    return view('/contacts-page');
});

Route::get('/pro-bono', function () {
    return view('/pro-bono-page');
});

//Route::get('/advokat-po-kriminalnim-spravam', function () {
//    return view('/advokat-po-kriminalnim-spravam');
//});

Route::get('/welcome', function () {
    return view('/welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
