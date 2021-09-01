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
    return view('layouts.master');
});

Route::prefix('jenispembayaran')->name('jenispembayaran.')->group(function(){
    Route::get('/','JenisPembayaranController@index')->name('index');
    Route::get('/create', 'JenisPembayaranController@create')->name('create');
    Route::post('/store', 'JenisPembayaranController@store')->name('store');
    Route::get('/edit/{jenispembayaran}', 'JenisPembayaranController@edit')->name('edit');
    Route::get('/show/{jenispembayaran}', 'JenisPembayaranController@show')->name('show');
    Route::put('/update/{jenispembayaran}', 'JenisPembayaranController@update')->name('update');
    Route::delete('/delete/{jenispembayaran}', 'JenisPembayaranController@destroy')->name('destroy');
});