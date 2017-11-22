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


// Route::get('/signin', function () {
//     return '<a href="/google/auth">Click here to login</a> ';
// });


Route::get('/{service}/auth', 'Auth\LoginController@redirectToProvider');

Route::get('/{service}/handle', 'Auth\LoginController@handleProviderCallback');

Route::get('/signin2', function () {
    return view('signin');
});
Route::get('/home2', function () {
    return view('index');
});
//->name('home')


Auth::routes();

Route::get('/home', 'HomeController@index');
