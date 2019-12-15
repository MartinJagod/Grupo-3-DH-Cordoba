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
    return view('auth.login');
});

Auth::routes();

Route::get('/solicitud/{id}', 'solicitudController@solicitud')->name ('solicitud');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/posts','ControllerPosts@index');

Route::post('/regPost', 'ControllerPosts@store');


Route::get('/friendship', 'friendsController@find')->name('friendship');
