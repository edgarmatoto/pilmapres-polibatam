<?php

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

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

Route::group([
    'as'            => 'register.',
    'middleware'    => 'guest',
    'namespace'     => 'App\Http\Controllers\Auth',
], function () {
    Route::get('/register', 'RegisterController@index')->name('index');
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
], function () {
    Route::get('/home', 'HomeController@index')->name('home');
});
