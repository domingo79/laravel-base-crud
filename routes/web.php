<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PageController@index');

Route::resource("comics", ComicController::class);

//la rotta resource contiene le 7 rotte
// Route::resource("movies", MovieController::class);


// Route::get('movies', 'MovieController@index')->name('movies');
// Route::post('movies', 'MovieController@store')->name('movies.store');
// Route::get('movies/create', 'MovieController@create')->name('movies.create');
// Route::get('movies/{movie}', 'MovieController@show')->name('movies.show');
// Route::get('movies/{movie}/edit', 'MovieController@edit')->name('movies.edit');
// Route::put('movies/{movie}', 'MovieController@update')->name('movies.update');
// Route::delete('movies/{movie}', 'MovieController@destroy')->name('movies.destroy');