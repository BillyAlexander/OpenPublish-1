<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Route::get('/', function()
// {
// 	return View::make('hello');
// });

//rutear a index
Route::get('/',array('as' => 'index', 'uses' => 'HomeController@showIndex'))->before("guest_user");

Route::get('/login',array('as' => 'login', 'uses' => 'HomeController@showLogin'))->before("guest_user");

Route::post('/login',array('before' => 'csrf','as' => 'makelogin', 'uses' => 'AuthController@makeLogin'));

Route::get('/logout',array( 'as' => 'makelogout', 'uses' => 'AuthController@makeLogout'));

Route::get('/welcome',array('as' => 'showwelcome', 'uses' => 'AuthController@showWelcome'))->before("auth_user");

//rutear a administracion

Route::get('/user/create',array('as' => 'createuser', 'uses' => 'UserController@showCreate'))->before("auth_user");

Route::post('/user/status',array('as' => 'liststatus', 'uses' => 'UserController@listStatus'))->before("auth_user");

Route::post('/user/rols',array('as' => 'listrols', 'uses' => 'UserController@listRols'))->before("auth_user");

Route::post('/rol/menus',array('as' => 'listmenus', 'uses' => 'UserController@listMenus'))->before("auth_user");

Route::post('/user/create',array('as' => 'usercreate', 'uses' => 'UserController@create'))->before("auth_user");

Route::get('/user/edit',array('as' => 'edituser', 'uses' => 'UserController@showEdit'))->before("auth_user");

Route::post('/user/edit',array('as' => 'useredit', 'uses' => 'UserController@update'))->before("auth_user");

Route::post('/user/delete',array('as' => 'userdel', 'uses' => 'UserController@destroy'))->before("auth_user");


//rutear a administracionvideos

Route::get('/video',array('as' => 'downloadxml', 'uses' => 'VideoController@showVideoAdmin'))->before("auth_user");


















//rutear a errores
App::missing(function($exception)
{
	return Response::view('errors.error404',array(),404);
});

