<?php

Route::bind('task', function($value, $route){
	return Item::where('id', $value)->first();
});
Route::get('/', array('as' => 'home','uses' => 'HomeController@getIndex'))->before('auth');
Route::post('/', array('uses' => 'HomeController@postIndex'))->before('csrf');
Route::get('/new', array('as' => 'new', 'uses' => 'HomeController@getNew'));
Route::post('/new', array('uses' => 'HomeController@postNew'))->before('csrf');
Route::get('/delete/{task}', array('as' => 'delete', 'uses' => 'HomeController@getDelete'));
Route::get('/inscription', array('as' => 'inscription','uses' => 'HomeController@getInscription'));
Route::post('inscription', array('uses' => 'AuthController@postInscription'));
Route::get('/login', array('as' => 'login', 'uses' => 'AuthController@getLogin'));
Route::post('login', array('uses' => 'AuthController@postLogin'));
Route::get('logout', array('as' => 'logout', 'uses' => 'AuthController@getLogout'));

