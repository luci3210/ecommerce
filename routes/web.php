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
// home 

Route::prefix('shop')->group(function () {
    Route::get('/view-item', 'EcomFront\EcomShopController@index')->name('shopView');
    //view item and pass slug tag
    Route::get('/list-item', 'EcomFront\EcomShopController@list')->name('shopList');
    //view list of item  and pass category,keyword,price,date etc





});

// public fron end route for users view


