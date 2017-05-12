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

Route::get('/', 'TrackController@index')->name('home');

Route::get('/formats', 'FormatController@index')->name('formats');
Route::get('/formats/create', 'FormatController@create');
Route::post('/formats', 'FormatController@store');
Route::get('/formats/{format}', 'FormatController@show');
Route::put('/formats/{format}', 'FormatController@update');
Route::get('/formats/delete/{formatId}', 'FormatController@delete');

Route::get('/artists', 'ArtistController@index')->name('artists');
Route::get('/artists/create', 'ArtistController@create');
Route::post('/artists', 'ArtistController@store');
Route::get('/artists/{artist}', 'ArtistController@show');
Route::put('/artists/{artist}', 'ArtistController@update');
Route::get('/artists/delete/{artistId}', 'ArtistController@delete');

Route::get('/seasons', 'SeasonController@index')->name('seasons');
Route::get('/seasons/create', 'SeasonController@create');
Route::post('/seasons', 'SeasonController@store');
Route::get('/seasons/{season}', 'SeasonController@show');
Route::put('/seasons/{season}', 'SeasonController@update');
Route::get('/seasons/delete/{seasonId}', 'SeasonController@delete');

Route::get('/albums', 'AlbumController@index')->name('albums');
Route::get('/albums/create', 'AlbumController@create');
Route::post('/albums', 'AlbumController@store');
Route::get('/albums/{album}', 'AlbumController@show');
Route::put('/albums/{album}', 'AlbumController@update');
Route::get('/albums/delete/{albumId}', 'AlbumController@delete');

Route::get('/tracks', 'TrackController@index')->name('tracks');
Route::get('/tracks/create', 'TrackController@create');
Route::post('/tracks', 'TrackController@store');
Route::get('/tracks/{track}', 'TrackController@show');
Route::put('/tracks/{track}', 'TrackController@update');
Route::get('/tracks/delete/{trackId}', 'TrackController@delete')->name('deleteTrack');

Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');
Route::get('/login', 'SessionsController@create')->name('login');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');


