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

Route::get('/{provider}/auth', 'Auth\LoginController@redirectToProvider');

Route::get('/{provider}/handle', 'Auth\LoginController@handleProviderCallback');

Route::get('/signin', function () {
    return view('signin');
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
Route::get('/home', 'IndexController@renderIndex');
Route::get('/home/getmsg', 'IndexController@getLocationNames');
Route::post('/home', 'IndexController@getLastPlans');

Route::resource('photos', 'PhotoController');