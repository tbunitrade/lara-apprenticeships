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


Route::get('lawyer-po-zed-ta-mytnym-spravam', function () {
    return view('practices.lawyer-po-zed-ta-mytnym-spravam');
});

Route::get('lawyer-po-bankivske-ta-finansove-pravo', function () {
    return view('practices.lawyer-po-bankivske-ta-finansove-pravo');
});

Route::get('lawyer-po-neruhomist-i-zemelne-pravo', function () {
    return view('practices.lawyer-po-neruhomist-i-zemelne-pravo');
});

Route::get('lawyer-po-hospodarski-spory', function () {
    return view('practices.lawyer-po-hospodarski-spory');
});

Route::get('lawyer-po-kriminalnim-spravam', function () {
    return view('practices.lawyer-po-kriminalnim-spravam');
});

Route::get('lawyer-po-voennym-delam', function () {
    return view('practices.lawyer-po-voennym-delam');
});

Route::get('lawyer-po-konkurentne-pravo', function () {
    return view('practices.lawyer-po-konkurentne-pravo');
});

Route::get('lawyer-po-korporativnym-sporam', function () {
    return view('practices.lawyer-po-korporativnym-sporam');
});

Route::get('lawyer-po-mediatsiyu', function () {
    return view('practices.lawyer-po-mediatsiyu');
});

Route::get('lawyer-po-spadkovym-spravam', function () {
    return view('practices.lawyer-po-spadkovym-spravam');
});

Route::get('lawyer-po-nalogovym-delam', function () {
    return view('practices.lawyer-po-nalogovym-delam');
});

Route::get('lawyer-po-espch', function () {
    return view('practices.lawyer-po-espch');
});

Route::get('lawyer-po-yuridichnu-konsultatsiyu-abo-dopomogu-u-zakupivli-prozorro', function () {
    return view('practices.lawyer-po-yuridichnu-konsultatsiyu-abo-dopomogu-u-zakupivli-prozorro');
});

Route::get('lawyer-po-simeyne-pravo', function () {
    return view('practices.lawyer-po-simeyne-pravo');
});

Route::get('lawyer-po-trudovym-sporam', function () {
    return view('practices.lawyer-po-trudovym-sporam');
});

Route::get('lawyer-po-auditam-yuridichnij-audit-pidpriyemstva', function () {
    return view('practices.lawyer-po-auditam-yuridichnij-audit-pidpriyemstva');
});

Route::get('lawyer-po-legal-opnion-yuridichniy-vysnovok', function () {
    return view('practices.lawyer-po-legal-opnion-yuridichniy-vysnovok');
});

Route::get('lawyer-po-intelektualne-pravo-intelektualna-vlasnist', function () {
    return view('practices.lawyer-po-intelektualne-pravo-intelektualna-vlasnist');
});

Route::get('lawyer-po-sudovym-sporam-v-it', function () {
    return view('practices.lawyer-po-sudovym-sporam-v-it');
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
