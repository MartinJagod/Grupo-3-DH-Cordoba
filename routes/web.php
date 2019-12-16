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

Route::get('/nombreUser', 'ControllerPosts@devolverUser');

Route::post('/regPost', 'ControllerPosts@store');

Route::get('/notificacion','notificacioneController@notificacion')->name('notificacion');
Route::get('/respuestasolicitud/{resp}/{id}','notificacioneController@respuestasolicitud')->name('respuestasolicitud');
Route::get('/friendship', 'friendsController@find')->name('friendship');
