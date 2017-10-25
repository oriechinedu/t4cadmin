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

/*
|--------------------------------------------------------------------------------
| External routes - Routes that don't require auth satisfaction
|--------------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/*
|--------------------------------------------------------------------------------
| Category Routes
|--------------------------------------------------------------------------------
*/

    
    Route::get('categories', array('as' => 'category.index', 'uses' => 'CategoryController@index'));
    Route::get('categories/add', array('as' => 'category.create', 'uses' => 'CategoryController@create'));
    Route::post('categories/store', array('as' => 'category.store', 'uses' => 'CategoryController@store'));
    Route::get('categories/edit/{id}', array('as' => 'category.edit', 'uses' => 'CategoryController@edit'));
    Route::any('categories/update/{id}', array('as' => 'category.update', 'uses' => 'CategoryController@update'));
    Route::any('categories/delete/{id}', array('as' => 'category.destroy', 'uses' => 'CategoryController@destroy'));


/*
|--------------------------------------------------------------------------------
| Questioons Routes
|--------------------------------------------------------------------------------
*/
	//Route::resource('/question', 'QuestionsController');
	Route::get('questions/edit/{id}', array('as' => 'questions.edit-question', 'uses' => 'QuestionsController@edit',));
/*
|--------------------------------------------------------------------------------
| Player Routes
|--------------------------------------------------------------------------------
*/
Route::post('player/create', array('as' => 'player.create', 'uses' => 'PlayerController@signup')); //create new player
Route::post('player/login', array('as' => 'player.login', 'uses' => 'PlayerController@login')); //login a player
Route::get('player/{id}', array('as' => 'player.player', 'uses' => 'PlayerController@player')); //get player full details
Route::get('player/{id}', array('as' => 'player.delete', 'uses' => 'PlayerController@delete')); //delete player account, applicable if user decides to remove themselves from the platform


/*
|--------------------------------------------------------------------------------
| Badge Routes
|--------------------------------------------------------------------------------
*/

Route::post('badge/create', array('as' => 'badge.create', 'uses' => 'BadgeController@create'));
Route::get('badge', array('as' => 'badge.index', 'uses' => 'BadgeController@index'));
Route::get('badge/{id}', array('as' => 'badge.badge', 'uses' => 'BadgeController@badge'));
Route::post('badge/update', array('as' => 'badge.update', 'uses' => 'BadgeController@update'));
Route::post('badge/delete', array('as' => 'badge.delet', 'uses' => 'BadgeController@delete'));

/*
|--------------------------------------------------------------------------------
| Level Routes
|--------------------------------------------------------------------------------
*/

Route::post('level/create', array('as' => 'level.create', 'uses' => 'LevelController@create'));
Route::get('level', array('as' => 'level.index', 'uses' => 'LevelController@index'));
Route::get('level/{id}', array('as' => 'badge.badge', 'uses' => 'LevelController@badge'));
Route::post('level/update', array('as' => 'badge.update', 'uses' => 'LevelController@update'));
Route::post('level/delete', array('as' => 'badge.delet', 'uses' => 'LevelController@delete'));