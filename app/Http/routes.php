<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
// prikaz svih recepata (popis)
Route::get('/recipes', 'RecipesController@index');

// prikaz view-a sa web obrascem za unos
Route::get('/recipes/add', 'RecipesController@add'); 
//spremanje podataka u bazu
Route::post('/recipes/add', 'RecipesController@save' );

//detaljan prikaz određenog recepta
Route::get('/recipes/view/{id}', 'RecipesController@view' );

// prikaz webobrasca za uređivanje
Route::get('/recipes/edit/{id}', 'RecipesController@edit');
// ažuriranje podataka u bazi
Route::post('/recipes/edit', 'RecipesController@update');

//brisanje recepta
Route::delete('/recipes/del/{id}', 'RecipesController@delete');
