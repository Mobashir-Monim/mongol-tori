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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Team Memebers Routes
Route::get('/team-members', 'TeamMembersController@show')->middleware('auth')->name('team-members');
Route::post('/team-members/delete/{id}', 'TeamMembersController@delete')->middleware('auth')->name('team-members-delete');
Route::get('/team-members/add', 'TeamMembersController@create')->middleware('auth')->name('team-member-create');
Route::post('/team-members/add', 'TeamMembersController@store')->middleware('auth')->name('team-member-add');
Route::get('/team-members/edit/{id}', 'TeamMembersController@edit')->middleware('auth')->name('team-member-edit');
Route::post('/team-members/edit', 'TeamMembersController@update')->middleware('auth')->name('team-member-update');

//Team Routes
Route::get('/teams', 'TeamsController@adminView')->middleware('auth');
Route::get('/teams/create', 'TeamsController@create')->middleware('auth');
Route::post('/teams/create', 'TeamsController@store')->middleware('auth');
Route::get('/teams/update/{id}', 'TeamsController@edit')->middleware('auth');
Route::post('/teams/update', 'TeamsController@update')->middleware('auth');
Route::get('/teams/delete/{id}', 'TeamsController@delete')->middleware('auth');

//Web Content Routes
Route::get('/content/edit/{id}', 'WebContentsController@edit')->middleware('auth');
Route::post('/content/edit', 'WebContentsController@update')->middleware('auth');