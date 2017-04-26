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

Route::get('/', 'TrackController@index');

Route::get('/formats', 'FormatController@index');
Route::post('/formats', 'FormatController@store');
Route::get('/formats/create', 'FormatController@create');
Route::get('/artists', 'ArtistController@index');
Route::post('/artists', 'ArtistController@store');
Route::get('/artists/create', 'ArtistController@create');
Route::get('/seasons', 'SeasonController@index');
Route::post('/seasons', 'SeasonController@store');
Route::get('/seasons/create', 'SeasonController@create');
Route::get('/albums', 'AlbumController@index');
Route::post('/albums', 'AlbumController@store');
Route::get('/albums/create', 'AlbumController@create');
Route::get('/tracks', 'TrackController@index');
Route::post('/tracks', 'TrackController@store');
Route::get('/tracks/create', 'TrackController@create');
