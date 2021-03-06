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

//Route::model('song','App\Song'); so aceita id

/*Route::bind('song', function($slug)
{

	return App\Song::whereSlug($slug)->first();
});
*/

//Route::get('/', 'WelcomeController@index');

Route::get('home', 'PageController@index');



Route::get('about','PageController@about');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('songs','SongsController@index');
  
Route::get('songs/{slug}','SongsController@show');

Route::get('songs/{slug}/edit','SongsController@edit');

Route::patch('songs/{slug}', 'SongsController@update');


//para imagens
Route::get('/', function(){ return redirect('/image'); });
Route::resource('image', 'ImageController'); 
//Route::get('image/create','ImageController@create');