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
Route::get('user_generator', function()
{
  return View::make('user_generator')->with(array('input' => [],
                                                  'users' => []));
});


Route::post('user_generator', function()
{
  $input = Input::all();
  $faker = Faker::create();
  $users = [];
  for ($i=0; $i<$input['num_users']; $i++) {
    $users[$i] = array('name' => $faker->name);
  }
  return View::make('user_generator')->with(array('input' => $input,
                                                  'users' => $users));
});



// Route::get('User', function()
// {
//   return View::make('User')->with(array('input' => [],'user' => []));
// });


// Route::post('User', function()
// {
//   $input = Input::all();
//   $generator = new LoremIpsum();
//   $user = $generator->getUsers($input['num_users']);
//   return View::make('User')->with(array('input' => $input,
//                                           'user' => $user));
// });

// Route::post('User', function()
// {
//   $input = Input::all();
//   $faker = Faker::create();
//   $users = [];
//   for ($i=0; $i<$input['num_users']; $i++) {
//     $users[$i] = array('name' => $faker->name, 'address' => $faker->address);
//   }
//   return View::make('User')->with(array('input' => $input,
//                                                   'users' => $users));
// });