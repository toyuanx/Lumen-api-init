<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It is a breeze. Simply tell Lumen the URIs it should respond to
  | and give it the Closure to call when that URI is requested.
  |
 */

//$app->get('/', function () use ($app) {
//    return $app->version();
//});

$app->get('/', function() {
	return 123;
});

$app->get('user/{id}/profile', ['as' => 'profile', function ($id) {
	return "hello ".$id;
}]);

$url = route('profile', ['id' => 1]);

$app->get('test', 'ExampleController@test');

//return redirect()->route('profile');
$app->get('dashboard', function () {
    return redirect()->route('profile',1);
});