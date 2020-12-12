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

Route::get('/', function () {
    return view('awal');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/cobaa', function () {
    return view('usernya.homeuser');
});

Route::get('/netadv', function () {
    return view('usernya.ruang_network_advances');
});




// Route::get('/cobadv', 'App\Http\Controllers\NadvController@index');
//netadv
Route::get('/netadv/pdf', 'App\Http\Controllers\NadvController@pdfnetadv');

Auth::routes();
//netadv
Route::get('/netadv', [App\Http\Controllers\NadvController::class, 'index'])->name('home');
//homeuser
Route::get('/home', function () {
    return view('usernya.homeuser');
});

//ruang dua
Route::get('/rdua', [App\Http\Controllers\NadvController::class, 'rdua'])->name('rdua');
Route::get('/rdua/pdf', 'App\Http\Controllers\NadvController@pdfrdua');

//ruang empat
Route::get('/rempat', [App\Http\Controllers\NadvController::class, 'rempat'])->name('rempat');
Route::get('/rempat/pdf', 'App\Http\Controllers\NadvController@pdfempat');

//ruang enam
Route::get('/renam', [App\Http\Controllers\NadvController::class, 'renam'])->name('renam');
Route::get('/renam/pdf', 'App\Http\Controllers\NadvController@pdfenam');

//ruang lab acp
Route::get('/rlacp', [App\Http\Controllers\NadvController::class, 'rlacp'])->name('rlacp');
Route::get('/rlacp/pdf', 'App\Http\Controllers\NadvController@pdfacp');

//ruang lab bahasa
Route::get('/rlbh', [App\Http\Controllers\NadvController::class, 'rlbh'])->name('rlbh');
Route::get('/rlbh/pdf', 'App\Http\Controllers\NadvController@pdfbhs');

//ruang lab broadcasting 
Route::get('/rbc', [App\Http\Controllers\NadvController::class, 'rbc'])->name('rbc');
Route::get('/rbc/pdf', 'App\Http\Controllers\NadvController@pdfbc');

//ruang lima
Route::get('/rlima', [App\Http\Controllers\NadvController::class, 'rlima'])->name('rlima');
Route::get('/rlima/pdf', 'App\Http\Controllers\NadvController@pdflima');

//ruang mm adv
Route::get('/rmmadv', [App\Http\Controllers\NadvController::class, 'rmmadv'])->name('rmmadv');
Route::get('/rmmadv/pdf', 'App\Http\Controllers\NadvController@pdfmmadv');

//ruang network
Route::get('/rnet', [App\Http\Controllers\NadvController::class, 'rnet'])->name('rnet');
Route::get('/rnet/pdf', 'App\Http\Controllers\NadvController@pdfnet');

//ruang rpl adv

Route::get('/rrpladv', [App\Http\Controllers\NadvController::class, 'rrpladv'])->name('rrpladv');
Route::get('/rrpladv/pdf', 'App\Http\Controllers\NadvController@pdfrpladv');

//ruang satu
Route::get('/rsatu', [App\Http\Controllers\NadvController::class, 'rsatu'])->name('rsatu');
Route::get('/rsatu/pdf', 'App\Http\Controllers\NadvController@pdfsatu');

//ruang tiga
Route::get('/rtiga', [App\Http\Controllers\NadvController::class, 'rtiga'])->name('rtiga');
Route::get('/rtiga/pdf', 'App\Http\Controllers\NadvController@pdftiga');