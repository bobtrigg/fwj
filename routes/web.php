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

Route::group(['prefix' => 'formats'], function() {

	Route::get('', 'FormatController@index')->name('formats');
	Route::post('', 'FormatController@store');

	Route::get('create', 'FormatController@create');
	Route::get('{format}', 'FormatController@show');
	Route::put('{format}', 'FormatController@update');
	Route::get('delete/{formatId}', 'FormatController@delete');
});

Route::group(['prefix' => 'artists'], function() {

	Route::get('', 'ArtistController@index')->name('artists');
	Route::post('', 'ArtistController@store');

	Route::get('create', 'ArtistController@create');
	Route::get('{artist}', 'ArtistController@show');
	Route::put('{artist}', 'ArtistController@update');
	Route::get('delete/{artistId}', 'ArtistController@delete');
});

Route::group(['prefix' => 'seasons'], function() {

	Route::get('', 'SeasonController@index')->name('seasons');
	Route::post('', 'SeasonController@store');

	Route::get('create', 'SeasonController@create');
	Route::get('{season}', 'SeasonController@show');
	Route::put('{season}', 'SeasonController@update');
	Route::get('delete/{seasonId}', 'SeasonController@delete');
});

Route::group(['prefix' => 'albums'], function() {

	Route::get('', 'AlbumController@index')->name('albums');
	Route::post('', 'AlbumController@store');

	Route::get('create', 'AlbumController@create');
	Route::get('{album}', 'AlbumController@show');
	Route::put('{album}', 'AlbumController@update');
	Route::get('delete/{albumId}', 'AlbumController@delete');
});

Route::group(['prefix' => 'tracks'], function() {

	Route::get('', 'TrackController@index')->name('tracks');
	Route::post('', 'TrackController@store');
	
	Route::get('create', 'TrackController@create');
	Route::get('{track}', 'TrackController@show');
	Route::put('{track}', 'TrackController@update');
	Route::get('delete/{trackId}', 'TrackController@delete')->name('deleteTrack');
});

Route::get('register', 'RegistrationController@create');
Route::post('register', 'RegistrationController@store');
Route::get('login', 'SessionsController@create')->name('login');
Route::post('login', 'SessionsController@store');
Route::get('logout', 'SessionsController@destroy');
