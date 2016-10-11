<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/




Route::group(['middleware' => 'auth'], function()
{
	/*Route::get('/', function () {
	    return view('welcome');
	});*/


	Route::get('/', 'HomeController@index'); 

	Route::group(['middleware' => 'pageRoleVerification'], function()
	{
		Route::resource('/user', 'UserController');
		Route::resource('/role', 'RoleController');
		Route::resource('/page', 'PageController');
	});
});



/** This is the route for authentication,login,register,logout **/
//Route::auth();
Route::get('/logout', function () {
    Auth::logout();
    Session::flush();
    return redirect('/');
});
Route::controller('/', 'Auth\AuthController');





