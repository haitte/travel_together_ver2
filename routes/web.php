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

Route::get('/survey', 'PagesController@survey');
Route::get('/myhome', 'PagesController@myhome');
Route::get('/mytrips', 'SurveysController@mytrips');

Route::resource('surveys','SurveysController');
Route::resource('trips','TripsController');
Route::resource('similarity','MatchmakingController');

Route::get('/dashboard', 'DashboardController@index');


Route::get('/','IndexController@renderIndex');

Route::post('/', 'IndexController@search');

Route::get('/{provider}/auth', 'Auth\LoginController@redirectToProvider');

Route::get('/{provider}/handle', 'Auth\LoginController@handleProviderCallback');

Route::get('/signin', function () {
    return view('signin');
});

Auth::routes();


Route::get('/publishPlan/{plan_id}', 'PublishPlanController@index');
Route::get('/userProfile', 'UserProfileController@index')->name('userProfile');

Route::get('/profile', 'ProfileController@profile');
Route::get('/plan', 'PlanController@plan');
Route::get('/comment', 'CommentController@comment');

Route::post('/addProfile', 'ProfileController@addProfile');
Route::post('/addPlan', 'PlanController@addPlan');

Route::post('/addComment', 'CommentController@addComment');
Route::get('/home', 'IndexController@renderIndex');
Route::get('/home/getmsg', 'IndexController@getLocationNames');
Route::post('/home', 'IndexController@getLastPlans');
// Route::get('/home/display/{id}', 'IndexController@getDisplay');

Route::resource('photos', 'PhotoController');
