<?php

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


Route::group(['prefix' => 'admin'], function(){
    // AdminHome
    Route::get('home', 'Admin\HomeController@index')->name('admin.home');
    //login&logout
    Route::get('login', 'Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'Admin\LoginController@login')->name('admin.login');
    Route::post('logout', 'Admin\LoginController@logout')->name('admin.logout');
});

Route::group(['prefix' => 'user', 'middleware' => 'auth'], function() {
    Route::get('newclient/create', 'User\NewClientController@add');
    Route::post('newclient/create', 'User\NewClientController@create');
});

Route::group(['prefix' => 'user', 'middleware' => 'auth'], function() {
    Route::get('client/create', 'User\ClientController@add');
    Route::post('client/create', 'User\ClientController@create');
    Route::get('client/edit', 'User\ClientController@edit');
    Route::post('client/update', 'User\ClientController@update');
});