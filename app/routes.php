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
	return View::make('hello');
});

Route::get('/test', function()
{
	echo 'test hello route';
});

Route::get('/Lorem', function()
{
	return View::make('LoremInput');
});

Route::post('/Lorem', function()
{	
	return View::make('LoremResult');
});

Route::get('/User', function()
{
	return View::make('UserInput');
});

Route::post('/User', function()
{
	return View::make('UserResult');
});