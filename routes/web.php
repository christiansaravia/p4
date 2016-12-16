<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
	return view('welcome');
});

// Routes for Candidates
Route::get('/candidates', 'CandidateController@index')->name('candidates.index');
Route::get('/candidates/create', 'CandidateController@create')->name('candidates.create')->middleware('auth');
Route::post('/candidates', 'CandidateController@store')->name('candidates.store');
Route::get('/candidates/{id}', 'CandidateController@show')->name('candidates.show');
Route::get('/candidates/{id}/edit', 'CandidateController@edit')->name('candidates.edit');
Route::put('/candidates/{id}', 'CandidateController@update')->name('candidates.update');
Route::get('/candidates/{id}/delete', 'CandidateController@delete')->name('candidates.destroy');
Route::delete('/candidates/{id}', 'CandidateController@destroy')->name('candidates.destroy');

// Routes for Jobs
Route::get('/jobs', 'JobController@index')->name('jobs.index');
Route::get('/jobs/create', 'JobController@create')->name('jobs.create')->middleware('auth');
Route::post('/jobs', 'JobController@store')->name('jobs.store');
Route::get('/jobs/{id}', 'JobController@show')->name('jobs.show');
Route::get('/jobs/{id}/edit', 'JobController@edit')->name('jobs.edit');
Route::put('/jobs/{id}', 'JobController@update')->name('jobs.update');
Route::get('/jobs/{id}/delete', 'JobController@delete')->name('jobs.destroy');
Route::delete('/jobs/{id}', 'JobController@destroy')->name('jobs.destroy');

// Routes for Companies
Route::get('/companies', 'CompanyController@index')->name('companies.index');


Auth::routes();
Route::get('/logout','Auth\LoginController@logout')->name('logout');

Route::get('/home', 'HomeController@index');