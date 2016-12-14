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
Route::get('/candidates/{id}', 'CandidateController@show')->name('candidates.show');
Route::get('/candidates/{id}/edit', 'CandidateController@edit')->name('candidates.edit');
Route::put('/candidates/{id}', 'CandidateController@update')->name('candidates.update');
Route::delete('/candidates/{id}', 'CandidateController@destroy')->name('candidates.destroy');

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

// Temporary code to test database connection
Route::get('/debug', function() {

    echo '<pre>';

    echo '<h1>Environment</h1>';
    echo App::environment();

    echo '<h1>Debugging?</h1>';
    if(config('app.debug')) echo "Yes"; else echo "No";

    echo '<h1>Database Config</h1>';
    /*
    The following line will output your MySQL credentials.
    Uncomment it only if you're having a hard time connecting to the database and you
    need to confirm your credentials.
    When you're done debugging, comment it back out so you don't accidentally leave it
    running on your live server, making your credentials public.
    */
    //print_r(config('database.connections.mysql'));

    echo '<h1>Test Database Connection</h1>';
    try {
        $results = DB::select('SHOW DATABASES;');
        echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
        echo "<br><br>Your Databases:<br><br>";
        print_r($results);
    }
    catch (Exception $e) {
        echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
    }

    echo '</pre>';

});
