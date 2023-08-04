<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostGuzzleController;
use App\Http\Controllers\MailController;

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

Route::get('add-blog-post-form', function (){
    return view('add-blog-post-form');
});

//Route::get('add-blog-post-form', [PostController::class,'index']);
Route::post('store-form', [PostController::class, 'store']);

Route::post('send-mail', [MailController::class, 'go']);
//Route::get('send-mail', [MailController::class, 'index']);

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

Route::get('abonentske-yurydychne-obslugovuvannya-yurydychnyh-osib', function () {
    return view('practices.abonentske-yurydychne-obslugovuvannya-yurydychnyh-osib');
});


Route::get('advokat-po-zed-ta-mytnym-spravam', function () {
    return view('practices.advokat-po-zed-ta-mytnym-spravam');
});

Route::get('advokat-po-bankivske-ta-finansove-pravo', function () {
    return view('practices.advokat-po-bankivske-ta-finansove-pravo');
});

Route::get('advokat-po-neruhomist-i-zemelne-pravo', function () {
    return view('practices.advokat-po-neruhomist-i-zemelne-pravo');
});

Route::get('advokat-po-hospodarski-spory', function () {
    return view('practices.advokat-po-hospodarski-spory');
});

Route::get('advokat-po-kriminalnim-spravam', function () {
    return view('practices.advokat-po-kriminalnim-spravam');
});

Route::get('advokat-po-voennym-delam', function () {
    return view('practices.advokat-po-voennym-delam');
});

Route::get('advokat-po-konkurentne-pravo', function () {
    return view('practices.advokat-po-konkurentne-pravo');
});

Route::get('advokat-po-korporativnym-sporam', function () {
    return view('practices.advokat-po-korporativnym-sporam');
});

Route::get('advokat-po-mediatsiyu', function () {
    return view('practices.advokat-po-mediatsiyu');
});

Route::get('advokat-po-spadkovym-spravam', function () {
    return view('practices.advokat-po-spadkovym-spravam');
});

Route::get('advokat-po-nalogovym-delam', function () {
    return view('practices.advokat-po-nalogovym-delam');
});

Route::get('advokat-po-espch', function () {
    return view('practices.advokat-po-espch');
});

Route::get('advokat-po-yuridichnu-konsultatsiyu-abo-dopomogu-u-zakupivli-prozorro', function () {
    return view('practices.advokat-po-yuridichnu-konsultatsiyu-abo-dopomogu-u-zakupivli-prozorro');
});

Route::get('advokat-po-simeyne-pravo', function () {
    return view('practices.advokat-po-simeyne-pravo');
});

Route::get('advokat-po-trudovym-sporam', function () {
    return view('practices.advokat-po-trudovym-sporam');
});

Route::get('advokat-po-auditam-yuridichnij-audit-pidpriyemstva', function () {
    return view('practices.advokat-po-auditam-yuridichnij-audit-pidpriyemstva');
});

Route::get('advokat-po-legal-opnion-yuridichniy-vysnovok', function () {
    return view('practices.advokat-po-legal-opnion-yuridichniy-vysnovok');
});

Route::get('advokat-po-intelektualne-pravo-intelektualna-vlasnist', function () {
    return view('practices.advokat-po-intelektualne-pravo-intelektualna-vlasnist');
});

Route::get('advokat-po-sudovym-sporam-v-it', function () {
    return view('practices.advokat-po-sudovym-sporam-v-it');
});

//Route::get('advokat-po-kriminalnim-spravam', function () {
//    return view('practices.advokat-po-kriminalnim-spravam');
//});



Route::get('/thankyou', function () {
    return view('/thankyou-page');
});

Route::get('/welcome', function () {
    return view('/welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
