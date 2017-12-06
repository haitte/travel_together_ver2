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


Route::get('/publishPlan', 'PublishPlanController@index')->name('publishPlan');
Route::get('/userProfile', 'UserProfileController@index')->name('userProfile');

Route::get('/profile', 'ProfileController@profile');
Route::get('/plan', 'PlanController@plan');
Route::get('/comment', 'CommentController@comment');

Route::post('/addProfile', 'ProfileController@addProfile');
Route::post('/addPlan', 'PlanController@addPlan');


//Route::get('/comment', 'CommentController@index')->name('comment');
Route::post('/addComment', 'CommentController@addComment');
