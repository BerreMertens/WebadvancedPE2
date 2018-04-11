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
Route::get('locatie/LocatieLijstGebruiker', 'LocatieController@indexGebruiker');
Route::get('locatie/NieuweLocatieAanmaken', 'LocatieController@createNewLocation');
Route::get('locatie/{id}', 'LocatieController@showLocation');
Route::put('locatie/update', 'LocatieController@update');
Route::post('locatie/create', 'LocatieController@create');
Route::name('locatie.delete')->delete('locatie/{id}', 'LocatieController@delete');

//Antwoorden
Route::get('locatie/{id}/AntwoordToevoegen', 'AntwoordController@showLocationToAddAnswer');
Route::get('locatie/locatieDetails/{id}', 'AntwoordController@showLocationAndAnswers');
Route::post('antwoord/create/{id}', 'AntwoordController@create');
Route::name('antwoord.delete')->delete('antwoord/{id}', 'AntwoordController@delete');

//login
//login route naar login form
Route::get('Login', array('uses' => 'HomeController@showLogin'));
//route om effectief in te loggen
Route::post('Login', array('uses' => 'HomeController@doLogin'));