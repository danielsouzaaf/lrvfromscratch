<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PagesController@welcome');

Route::get('/meusite', 'PagesController@meusite');

Route::get('/cards', 'CardsController@index');
Route::get('/cards/{card}', 'CardsController@show');

Route::post('/cards/{card}/notes', 'NotesController@store');
