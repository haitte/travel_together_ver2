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

Route::get('/similarity', 'PagesController@similarity');

Route::get('/survey', 'PagesController@survey');
Route::get('/myhome', 'PagesController@myhome');
Route::get('/mytrips', 'SurveysController@mytrips');

Route::get('/trips', 'TripsController@index');

Route::resource('surveys','SurveysController');
Route::resource('trips','TripsController');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');


