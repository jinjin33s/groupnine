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


Route::get('/videos', 'VideosController@index');

Route::post('/videos/create', 'VideosController@create');

Route::post('/videos/update', 'VideosController@update');

Route::post('/videos/delete', 'VideosController@delete');

Route::post('/videos/views', 'VideosController@views');

Route::post('/videos/viewsReport', 'VideosController@viewsReport');