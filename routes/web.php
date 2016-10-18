<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/



Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/cards', 'CardsController@index');
Route::get('/cards/{card}', 'CardsController@show');
Route::get('/notes/{note}/edit', 'NotesController@edit');

//Post

Route::post('/cards/{card}/notes', 'NotesController@store');

//update
Route::patch('notes/{note}', 'NotesController@update');
