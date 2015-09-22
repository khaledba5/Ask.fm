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

/*
Route::get('/', function()
{
	return View::make('default');
});
*/


Route::get('/', array('as'=>'home','uses'=>'questions@index'));
Route::get('register',array('as'=>'register','uses'=>'Users@neew'));

Route::post('register',array('before'=>'csrf','uses'=>'Users@create'));
