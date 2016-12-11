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
Route::resource('pages', 'PagesController');
Route::resource('keys', 'KeysController');
Route::resource('categories', 'CategoriesController');
Route::resource('sites', 'SitesController');
Route::resource('cars', 'CarsController');
Route::resource('groups', 'GroupsController');
Route::resource('products', 'ProductsController');
Route::resource('users', 'UsersController');




Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
