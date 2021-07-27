<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'EcomFront\HomeEcomController@index')->name('homeView');
Route::get('/shop-item', 'EcomFront\EcomShopController@index')->name('shopView');

// public fron end route for users view


