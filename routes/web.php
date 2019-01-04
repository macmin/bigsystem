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
    return view('home.index');
});


Route::group(['prefix' => 'adminor'], function(){
	Route::get('/home', 'HomeController@index')->name('home');
	Route::get('/admincv', 'CurriculumController@index')->name('indexcv');
	Route::get('/admincv/{id}', 'CurriculumController@show');
});

Auth::routes();


Route::group(['prefix' => 'cv'] , function () {

	Route::get('/blackmac', function(){
		return "CVS";
	});

	Route::get('/blackmac/{id}', 'CvController@show');

});

