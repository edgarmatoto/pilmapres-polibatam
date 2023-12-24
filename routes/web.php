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

Route::redirect('/mhs', '/mhs/home');
Route::redirect('/admin', '/admin/home');

Route::get('/ketentuan-privasi', 'App\Http\Controllers\KetentuanPrivasiController@index')->name('ketentuan-privasi');
Route::get('/bantuan', 'App\Http\Controllers\BantuanController@index')->name('bantuan');

//== guest route
Route::group(['middleware' => 'guest'], function () {
    Route::get('/', 'App\Http\Controllers\WelcomeController@index')->name('welcome');

    Route::group(['namespace' => 'App\Http\Controllers\Auth'], function () {
        Route::post('/authentication', 'LoginController@authentication')->name('authentication');
        Route::get('/register', 'RegisterController@index')->name('register.index');
        Route::post('/register', 'RegisterController@store')->name('register.store');
    });
});

//== mahasiswa route
Route::group([
    'as'            => 'mhs.',
    'prefix'        => 'mhs',
    'namespace'     => 'App\Http\Controllers\Mahasiswa',
    'middleware'    => ['auth:mhs']
], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::post('/logout', 'LogoutController@logout')->name('logout');
    Route::post('/ulasan/{alternatif}', 'UlasanController@store')->name('ulasan');

    Route::group([
        'as'            => 'pelayanan.',
        'controller'    => 'PelayananController'
    ], function () {
        Route::get('/pelayanan', 'index')->name('index');
        Route::post('/pelayanan', 'store')->name('store');
    });

    Route::group([
        'as'            => 'profile.',
        'controller'    => 'ProfileController'
    ], function () {
        Route::get('/profile', 'index')->name('index');
        Route::put('/profile', 'update')->name('update');
    });
});

//== admin route
Route::group([
    'as'            => 'admin.',
    'prefix'        => 'admin',
    'namespace'     => 'App\Http\Controllers\Admin',
    'middleware'    => ['auth:admin']
], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/preferensi', 'PreferensiController@index')->name('preferensi.index');
    Route::post('/logout', 'LogoutController@logout')->name('logout');

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
        Route::get('/bobot-kriteria/{kriteria}/edit', 'edit')->name('edit');
        Route::put('/bobot-kriteria/{kriteria}', 'update')->name('update');
        Route::post('/bobot-kriteria', 'store')->name('store');
        Route::delete('/bobot-kriteria/{kriteria}', 'destroy')->name('destroy');
    });

    Route::group([
        'as'            => 'matrik.',
        'controller'    => 'MatrikController'
    ], function () {
        Route::get('/matrik', 'index')->name('index');
        Route::post('/matrik', 'store')->name('store');
        Route::delete('/matrik/{alternatif}', 'destroy')->name('destroy');
    });
});

Route::get('/foo', function () {
    $targetFolder = base_path() . '/storage/app/public';
    $linkFolder = $_SERVER['DOCUMENT_ROOT'] . '/storage';
    symlink($targetFolder, $linkFolder);
});
