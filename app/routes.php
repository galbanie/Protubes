<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	//Session::flash('alertes', array(new Alerte(),new Alerte('danger')));
	return View::make('layouts.default');
});

Route::get('signup', function()
{
	return View::make('layouts.formulaire')
			->with('titre','inscription')
			->with('layout','membre')
			->with('form','inscription');
});

Route::get('login', function()
{
	return View::make('layouts.formulaire')
			->with('layout','membre')
			->with('form','connexion');
});

Route::resource('membre', 'ControllerMembre');

//Route::get('inscription', 'ControllerMembre@inscription');

/*Route::get('membre', 'ControllerMembre@index');

Route::get('membre/{identifiant}', 'ControllerMembre@show');*/