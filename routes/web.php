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

use Illuminate\Http\Request;

// Home route

Route::get('/', function () {
  return view ('welcome');
});

// PEOPLE ROUTES

// Collective (Show all people, create a new person)
Route::get('/people', 'PersonController@index');
Route::post('/people', 'PersonController@create');

// Singular (Show a person, update a person, destroy a person)
Route::get('/people/{id}', 'PersonController@show');
Route::put('/people/{id}', 'PersonController@update');
Route::delete('/people/{id}', 'PersonController@destroy');

// ITEMS ROUTES

// Collective (Show all items, create a new item)
Route::get('/items', 'ItemController@index');
Route::post('/items', 'ItemController@create');

// Singular (Show an item, update an item, destroy an item)
Route::get('/items/{id}', 'ItemController@show');
Route::put('/items/{id}', 'ItemController@update');
Route::delete('/items/{id}', 'ItemController@destroy');

// OUTFITS ROUTES

// Collective (Show all items, create a new item)
Route::get('/outfits', 'OutfitController@index');
Route::post('/outfits', 'OutfitController@create');

// Singular (Show an item, update an item, destroy an item)
Route::get('/outfits/{id}', 'OutfitController@show');
Route::put('/outfits/{id}', 'OutfitController@update');
Route::delete('/outfits/{id}', 'OutfitController@destroy');
