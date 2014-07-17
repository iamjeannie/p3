<?php


use Faker\Factory as Faker;

Route::get('/', function()
{
	return View::make('index');
});

Route::get('/test', function()
{
	echo 'test hello route';
});

// Page1..........Lorem ipsum 
Route::get('Lorem', function()
{
  return View::make('Lorem')->with(array('input' => [],'lorem' => []));
});


Route::post('Lorem', function()
{
  $input = Input::all();
  $generator = new Badcow\LoremIpsum\Generator();
  $lorem = $generator->getParagraphs($input['num_paragraphs']);
  $View = View::make('Lorem')
  		->with(array('input' => $input,'lorem' => $lorem));
  return $View;
});


// Page2...........User

// user generator
Route::get('User', function()
{
  return View::make('User')->with(array('input' => [],
                                                  'users' => []));
});


Route::post('User', function()
{
  $input = Input::all();
  $fk = Faker::create();
  $users = [];
  for ($i=0; $i<$input['num_users']; $i++) {
    $users[$i] = array('name' => $fk->name);
  }
  $View = View::make('User')->with(array('input' => $input,'users' => $users));
  return $View;
});

