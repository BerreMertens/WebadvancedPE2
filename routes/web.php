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
    return view('home');
});

Route::get('/home', 'HomeController@index')->name('home');


//Locaties
Route::get('locatie', 'LocatieController@index');
Route::get('locatie/AlleLocaties', 'LocatieController@showAllLocations');
Route::get('locatie/{id}', 'LocatieController@showLocation');
Route::put('locatie/update', 'LocatieController@update');
Route::post('locatie/create', 'LocatieController@create');
Route::name('locatie.delete')->delete('locatie/{id}', 'LocatieController@delete');
