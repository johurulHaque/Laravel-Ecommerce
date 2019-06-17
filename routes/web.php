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
    return view('welcome');
});
// show the registration form
Route::get('/registration','RegistrationController@showRegisterform')->name('registration');
//store registration data in DB
Route::post('/registration','RegistrationController@storeRegistration')->name('storeRegistration');

// show the logedin form
Route::get('/logedin','RegistrationController@showLogedform')->name('logedin');
//check for log in
Route::post('/logedin','RegistrationController@checkLogedin')->name('checkLogedin');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
