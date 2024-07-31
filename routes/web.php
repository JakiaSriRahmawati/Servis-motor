<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
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

Route::get('/', 'UserController@homePelanggan')->name('homePelanggan');
Route::get('/detail/{artikel}', 'UserController@detail')->name('detailArtikel');
Route::get('/login', 'AdminController@login')->name('login');
Route::post('/postLogin', 'AuthController@postLogin')->name('postLogin');
Route::get('/booking', 'UserController@booking')->name('booking');
Route::post('/inputanbooking', 'UserController@inputanbooking')->name('inputanbooking');
Route::get('/aboutus', 'UserController@aboutus')->name('aboutus');
Route::get('/homeAdmin', 'AdminController@homeAdmin')->name('homeAdmin');
Route::get('/homeMekanik', 'AdminController@homeMekanik')->name('homeMekanik');
Route::get('/homeOwner', 'AdminController@homeOwner')->name('homeOwner');
Route::get('/homeKasir', 'AdminController@homeKasir')->name('homeKasir');