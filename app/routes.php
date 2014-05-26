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

Route::get('/', array( "as"=>"home",  function()
{
	return View::make('index');
}));

//AUTHENTICATION
Route::get('register', 'AuthController@getRegister');
Route::get('login', 'AuthController@getLogin');
Route::get('logout', 'AuthController@doLogout');

Route::post('create', 'AuthController@doRegister');
Route::post('authenticate', 'AuthController@doLogin');


//USER PAGES
Route::get('user/{userId}','UserController@getUserPage');
Route::get('user/{userId}/edit','UserController@editUserPage');
Route::post('user/{userId}/save','UserController@saveUser');


//STORY PAGES
Route::get('story/{storyid}','StoryController@getStoryPage');
Route::get('write', 'StoryController@newStoryPage');
Route::post('save','StoryController@insertStory');
Route::get('story/{storyid}/edit','StoryController@editStoryPage');
Route::post('story/{storyid}/save','StoryController@saveStory');

//TOP STORIES
Route::get('topStories', 'StoryController@topStoriesPage');