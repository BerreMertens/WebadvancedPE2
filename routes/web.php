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
Route::name('locatie.update')->put('locatie/{id}', 'LocatieController@update');
Route::post('locatie/create', 'LocatieController@create');
Route::name('locatie.delete')->delete('locatie/{id}', 'LocatieController@delete');

//Antwoorden
Route::get('locatie/{id}/AntwoordToevoegen', 'AntwoordController@showLocationToAddAnswer');
Route::get('locatie/locatieDetails/{id}', 'AntwoordController@showLocationAndAnswers');
Route::get('antwoord/lijstAntwoorden', 'AntwoordController@showMyAnswers');
Route::get('antwoord/{id}', 'AntwoordController@showAnswer');
Route::name('antwoord.update')->put('antwoord/{id}', 'AntwoordController@update');
Route::post('antwoord/create/{id}', 'AntwoordController@create');
Route::name('antwoord.delete')->delete('antwoord/{id}', 'AntwoordController@delete');

//login
//login route naar login form
Route::get('Login', array('uses' => 'HomeController@showLogin'));
//route om effectief in te loggen
Route::post('Login', array('uses' => 'HomeController@doLogin'));
//logout route
Route::get('logout', array('uses' => 'HomeController@doLogout'));
