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

Route::get('/', function () {
	return view('index');
});

Route::get('/test', 'TestController@show');

Route::get('/create', 'TestController@create');

Route::get('/createtest', 'TestController@create_test');

Auth::routes();
// Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('tests', 'TestController');

Route::resource('questions', 'QuestionController');

Route::get('/showquestion/{id}','TestDisplayController@show');

Route::get('/testresult', 'TestDisplayController@result');

Route::get('/about',function () {
	return view('about');
});

Route::get('/contact',function () {
	return view('contact');
});