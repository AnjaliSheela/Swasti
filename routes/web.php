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
    return view('welcome');
});


Auth::routes();

Route::resource('/courses','CourseController');
Route::get('/mentor','MentorController@index');
Route::get('/home', 'HomeController@index');
Route::post('status','MentorController@status')->name('status.update');
Route::get('/updates','HomeController@status');
Route::get('/course/{id}','CourseController@show');
Route::post('remove/{id}','AdminController@RemoveUser');
Route::post('addMentor/{id}','AdminController@addmentor');
Route::get('/admin','AdminController@index');
