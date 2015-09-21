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

 //shakl l home el mfrod yt3'yar
/*Route::get('/', function()
{
	return View::make('hello');
}); */


 //csrf token ??
Route::post('ask', array('before'=>'csrf', 'uses'=>'questions@create'));

Route::get('question/(:num)', array('as'=>'question', 'uses'=>'questions@view'));