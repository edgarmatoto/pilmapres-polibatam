<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\WelcomeController;
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

Route::redirect('/admin', '/admin/home');

//== guest route
Route::group([
    'middleware'    => 'guest',
    'namespace'     => 'App\Http\Controllers',
], function () {
    Route::get('/', 'WelcomeController@index')->name('welcome');

    Route::group(['namespace' => 'App\Http\Controllers\Auth'], function () {
        Route::post('/authentication', 'LoginController@authentication')->name('authentication');
        Route::get('/register', 'RegisterController@index')->name('register.index');
    });
});

//== mahasiswa route
Route::group([
    'as'            => 'mhs.',
    'prefix'        => 'mhs',
    'namespace'     => 'App\Http\Controllers\Mahasiswa',
], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/pelayanan', 'PelayananController@index')->name('pelayanan.index');
    Route::get('/profile', 'ProfileController@index')->name('profile.index');
});

//== admin route
Route::group([
    'as'            => 'admin.',
    'prefix'        => 'admin',
    'namespace'     => 'App\Http\Controllers\Admin',
    'middleware'    => ['auth:admin']
], function () {
    Route::get('/home', 'HomeController@index')->name('home');

    Route::group([
        'as'            => 'alternatif.',
        'controller'    => 'AlternatifController'
    ], function () {
        Route::get('/alternatif', 'index')->name('index');
        Route::post('/alternatif', 'store')->name('store');
        Route::get('/alternatif/{alternatif}/edit', 'edit')->name('edit');
        Route::put('/alternatif/{alternatif}', 'update')->name('update');
        Route::delete('/alternatif/{alternatif}', 'destroy')->name('destroy');
        Route::get('/alternatif/{alternatif}/unduh-berkas', 'unduhBerkas')->name('unduh-berkas');
    });

    Route::group([
        'as'            => 'bobot-kriteria.',
        'controller'    => 'BobotKriteriaController'
    ], function () {
        Route::get('/bobot-kriteria', 'index')->name('index');
        Route::post('/bobot-kriteria', 'store')->name('store');
    });

    Route::get('/matrik', 'MatrikController@index')->name('matrik.index');
    Route::get('/preferensi', 'PreferensiController@index')->name('preferensi.index');
});
