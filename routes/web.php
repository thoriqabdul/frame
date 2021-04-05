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

// Route::get('/', 'HomeController@landing')->name('landing');
Route::get('/', function () {
    return view('landing');
});


Auth::routes();

// Route::get('/', 'HomeController@index')->name('home');
Route::post('/reset-password/user', 'Client\HomeController@sendReset')->name('home.sendReset');
Route::get('/refresh', 'Client\HomeController@captcha')->name('captcha');

Route::group(['prefix' => 'Admin','namespace'=>'Admin','middleware'=>['auth','is_admin']], function () {
    Route::get('/', 'HomeController@index')->name('home.index');
    // Route::get('/User', 'HomeController@user')->name('home.user');
    Route::group(['prefix' => 'User'], function () {
        Route::get('/', 'UserController@index')->name('user.index');
        Route::post('/store', 'UserController@store')->name('user.store');
        Route::get('/data', 'UserController@data')->name('user.data');
        Route::get('/edit/{id}/edit', 'UserController@edit')->name('user.edit');
        Route::get('/create', 'UserController@create')->name('user.create');
        Route::get('/show/{id}', 'UserController@show')->name('user.show');
        Route::put('/update/{id}', 'UserController@update')->name('user.update');
        Route::delete('/delete/{id}', 'UserController@destroy')->name('user.delete');
    });
});