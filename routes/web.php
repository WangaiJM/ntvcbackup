<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PagesController@index')->name('index');
Route::get('/about', 'PagesController@about');
// Academic routes
Route::get('/programmes', 'PagesController@programmes');
// Administration routes
Route::get('/administration', 'PagesController@administration');
Route::get('/chairperson', 'PagesController@chairperson');
Route::get('/principal', 'PagesController@principal');
Route::get('/deputy_principal', 'PagesController@deputy_principal');
Route::get('/registrar', 'PagesController@registrar');
//Admissions
Route::get('/general', 'PagesController@general');
Route::get('/accounts', 'PagesController@accounts');
Route::get('/apply', 'PagesController@apply');
Route::get('/registration', 'PagesController@registration');
Route::get('/fees', 'PagesController@fees');
Route::get('/admission_programmes', 'PagesController@admission_programmes');
//Contacts
Route::get('/contacts', 'PagesController@contacts');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Student Registration
Route::resource('/students', 'StudentController');