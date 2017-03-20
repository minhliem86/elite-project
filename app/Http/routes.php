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

// Route::get('/', 'WelcomeController@index');
//
// Route::get('home', 'HomeController@index');
//
// Route::controllers([
// 	'auth' => 'Auth\AuthController',
// 	'password' => 'Auth\PasswordController',
// ]);

Route::get('/',['as'=>'homepage','uses'=>'IndexController@index']);
Route::get('/5-suat-hoc-bong-danh-gia',['as'=>'hocbong','uses'=>'IndexController@getHocbong']);
Route::get('/dang-ky',['as'=>'registerBook','uses'=>'IndexController@registerBook']);
Route::post('dang-ky',['as'=>'postRegisterBook','uses'=>'IndexController@postRegisterBook']);

Route::get('/thank-you',['as'=>'thankyou','uses'=>'IndexController@getThanks']);
Route::post('getCenter',['as'=>'ajaxCenter','uses'=>'IndexController@ajaxCenter']);


// Route::post('test',['as'=>'postTest','uses'=>'IndexController@postTest']);
