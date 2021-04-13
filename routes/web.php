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

Route::get('/','WelcomeController@index')->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/cek','CekStatusController@cek')->name('cek');

//cetak kartu pdf
Route::get('/kartu_pdf/{id}','CetakPDFController@cetak_pdf')->name('cetak_pdf');

Route::group([
    'prefix'=>'admin',
    'as' => 'admin.',
    'middleware'=> ['auth','role:Admin']],
    function (){

        Route::get('/','Admin\DashboardController@index')->name('dashboard');
        //  profil panitia
        Route::resource('panitia', 'Admin\PanitiaController');

        //  Calon Siswa
        Route::resource('pendaftaran','Admin\PendaftaranController');
        Route::get('pendafaran/kartu_pdf/{id}','Admin\PendaftaranController@cetak_pdf')->name('pendaftaran.cetak');

        //  jenis kelamin
        Route::resource('jeniskelamin','Admin\JenisKelaminController');

        // Jurusan
        Route::resource('jurusan','Admin\JurusanController');

        // Status Calon Siswa
        Route::resource('statuscalonsiswa', 'Admin\StatusCalonSiswaController');
});


Route::group(['prefix'=>'siswa',
    'as'=>'siswa.',
    'middleware'=> ['auth','role:Siswa']],
    function (){

    Route::get('/','Siswa\DashboardController@index')->name('dashboard');

    Route::resource('pendaftaran', 'Siswa\PendaftaranController');


});
