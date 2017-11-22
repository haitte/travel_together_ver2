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

Route::get('/', 'PagesController@index');
Route::get('/survey', 'PagesController@survey');
Route::get('/myhome', 'PagesController@myhome');

Route::resource('surveys','SurveysController');
Route::resource('trips','TripsController');
Route::resource('similarity','MatchmakingController');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');


