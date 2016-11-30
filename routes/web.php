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
Route::get('/candidates/create', 'CandidateController@create')->name('candidates.create');
Route::post('/candidates', 'CandidateController@store')->name('candidates.store');
Route::get('/candidates/{username}', 'CandidateController@show')->name('candidates.show');
Route::get('/candidates/{username}/edit', 'CandidateController@edit')->name('candidates.edit');
Route::put('/candidates/{username}', 'CandidateController@update')->name('candidates.update');
Route::delete('/candidates/{username}', 'CandidateController@destroy')->name('candidates.destroy');

// Routes for Companies
Route::get('/companies', 'CompanyController@index')->name('companies.index');
Route::get('/companies/create', 'CompanyController@create')->name('companies.create');
Route::post('/companies', 'CompanyController@store')->name('companies.store');
Route::get('/companies/{company}', 'CompanyController@show')->name('companies.show');
Route::get('/companies/{company}/edit', 'CompanyController@edit')->name('companies.edit');
Route::put('/companies/{company}', 'CompanyController@update')->name('companies.update');
Route::delete('/companies/{company}', 'CompanyController@destroy')->name('companies.destroy');

// Routes for Misc/Static Pages
Route::get('/about', 'PageController@about')->name('pages.about');
Route::get('/contact', 'PageController@contact')->name('pages.contact');
