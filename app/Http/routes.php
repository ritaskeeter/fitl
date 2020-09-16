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

Route::get('/', function () {
    return view('welcome');
});

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('hello', function () {
    return view('hello');
});
/*
Route::get('message', function () {
	//$view = view('message')->with('name', 'Victoria')->with('place', 'Scotland');
	//OR
	//$view = view('message')->withName('Helene')->withPlace('London');
	//AND 
	//return $view;
	return view('message', ['name'=>'Sona', 'place'=>'Geneva']);
});
*/

Route::get('about', 'PageController@aboutpage'); //It says that when the about URL is accessed, go to the Controller called PageController and the function inside it called aboutpage

    //return view('pages/about'); //Display the PHP file in the pages folder

Route::get('contact', 'PageController@contactpage');

Route::get('questions/{question}', 'QuestionController@show');

Route::get('questions', 'QuestionController@index');