<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/main', function () {
    return view('main');
});

Route::group([/*'domain' => 'my.hunlier.com',*/ 'namespace' => 'My', /*'middleware' => 'auth'*/], function () {
    Route::get('u/{id}',  ['as' => 'user', 'uses' => 'UsersController@getProfile']);
	 Route::get('u/{id}/settings/info',  ['as' => 'user', 'uses' => 'UsersController@getInfo']);
});


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
