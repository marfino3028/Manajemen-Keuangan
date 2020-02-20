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
    return view('layouts.home');
})->middleware('auth');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::get('/logout', 'HomeController@logout');
Route::resource('/activity', 'AktivitasController')->middleware('auth');
Route::resource('/pegawai', 'PegawaiController')->middleware('auth');
Route::resource('/pengurus', 'PengurusController')->middleware('auth');
Route::resource('/pemasukan', 'PemasukanController')->middleware('auth');
Route::resource('/pengeluaran', 'PengeluaranController')->middleware('auth');
Route::resource('/asrama', 'AsramaController')->middleware('auth');
Route::resource('/smp', 'SmpController')->middleware('auth');
Route::resource('/smk', 'SmkController')->middleware('auth');
Route::resource('/settings', 'ProfileController')->middleware('auth');

//ubah password
Route::get('change-password', 'ChangePasswordController@index');
Route::post('change-password', 'ChangePasswordController@store')->name('change.password');


//pdf 0nly ea
Route::get('pegawai-pdf','PegawaiController@pegawaiPDF')->middleware('auth');
Route::get('pengurus-pdf','PengurusController@pengurusPDF')->middleware('auth');
Route::get('smk-pdf','SmkController@smkPDF')->middleware('auth');
Route::get('smp-pdf','SmpController@smpPDF')->middleware('auth');
Route::get('asrama-pdf','AsramaController@asramaPDF')->middleware('auth');
Route::get('pemasukan-pdf','PemasukanController@pemasukanPDF');
Route::get('pengeluaran-pdf','PengeluaranController@pengeluaranPDF');
Route::get('aktivitas-pdf','AktivitasController@aktivitasPDF')->middleware('auth');

Route::get('/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::get('/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::post('/password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');
//clear cache ea
Route::get('/clear-cache',function(){
    Artisan::call('cache:clear');
    return "cache is cleared";
});

Route::get('/foo', function () {
    Artisan::call('storage:link');
 });
