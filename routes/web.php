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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'Admin','namespace'=>'Admin','middleware'=>['auth','is_admin']], function () {
    Route::get('/', 'HomeController@index')->name('home.index');

    Route::group(['prefix' => 'Publish'], function () {
        Route::get('/', 'UserController@index')->name('publish.index');
        Route::post('/store', 'UserController@store')->name('publish.store');
        Route::get('/edit/{id}/edit', 'UserController@edit')->name('publish.edit');
        Route::get('/create', 'UserController@create')->name('publish.create');
        Route::get('/show/{id}', 'UserController@show')->name('publish.show');
        Route::put('/update/{id}', 'UserController@update')->name('publish.update');
        Route::delete('/delete/{id}', 'UserController@destroy')->name('publish.delete');
    });
});
