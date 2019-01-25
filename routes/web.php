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
Route::get('/teams/{id}', 'TeamsController@show');

//Web Content Routes
Route::get('/content/edit/{id}', 'WebContentsController@edit')->middleware('auth');
Route::post('/content/edit', 'WebContentsController@update')->middleware('auth');

//Advisor Routes
Route::get('/advisors', 'AdvisorsController@show')->middleware('auth');
Route::get('/advisors/create', 'AdvisorsController@create')->middleware('auth');
Route::post('/advisors/create', 'AdvisorsController@store')->middleware('auth');
Route::get('/advisors/edit/{id}', 'AdvisorsController@edit')->middleware('auth');
Route::post('/advisors/edit', 'AdvisorsController@update')->middleware('auth');
Route::get('/advisors/delete/{id}', 'AdvisorsController@delete')->middleware('auth');

//Sponsor Routes
Route::get('/sponsors', 'SponsorsController@show')->middleware('auth');
Route::get('/sponsors/create', 'SponsorsController@create')->middleware('auth');
Route::post('/sponsors/create', 'SponsorsController@store')->middleware('auth');
Route::get('/sponsors/edit/{id}', 'SponsorsController@edit')->middleware('auth');
Route::post('/sponsors/edit', 'SponsorsController@update')->middleware('auth');
Route::get('/sponsors/delete/{id}', 'SponsorsController@delete')->middleware('auth');

// Test Route
Route::get('/test', function () {
    return view('test');
});