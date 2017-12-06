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

Route::get('/','IndexController@renderIndex');

Route::post('/', 'IndexController@search');
// Route::get('/signin', function () {
//     return '<a href="/google/auth">Click here to login</a> ';
// });


Route::get('/{provider}/auth', 'Auth\LoginController@redirectToProvider');

Route::get('/{provider}/handle', 'Auth\LoginController@handleProviderCallback');

Route::get('/signin', function () {
    return view('signin');
});
// Route::get('/home', function () {
//     return view('index');
// });
//->name('home')


Auth::routes();

Route::get('/home', 'IndexController@renderIndex');
Route::get('/home/getmsg', 'IndexController@getLocationNames');
Route::post('/home', 'IndexController@getLastPlans');

Route::resource('photos', 'PhotoController');
