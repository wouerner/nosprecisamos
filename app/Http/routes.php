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
Route::resource('opiniao', 'OpiniaoController');
Route::get('categoria/search', 'CategoriaController@search');
Route::get('categoria/projetos/{id}', 'CategoriaController@projetos');
Route::resource('categoria', 'CategoriaController');

Route::get('opiniao/create/{id}', 'OpiniaoController@create');
Route::resource('opiniao', 'OpiniaoController');
Route::get('projeto/search', 'ProjetoController@search');
Route::get('projeto/aprove/{id}', 'ProjetoController@aprove');
Route::resource('projeto', 'ProjetoController');

Route::auth();

Route::get('/home', 'HomeController@index');
