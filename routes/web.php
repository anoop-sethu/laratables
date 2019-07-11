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

Route::redirect('/', 'world')->name('index');

Route::get('/world/fetchData', 'CountryController@fetchData')->name('world.data');

Route::resource('/world', 'CountryController');

// Route::prefix('world')->name('world.')->group(function () {
//     Route::get('fetchData', 'CountryController@fetchData')->name('data');
//     Route::get('', 'CountryController@index')->name('index');
//     Route::get('{code}', 'CountryController@show')->name('show');
// });