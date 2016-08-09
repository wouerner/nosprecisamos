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

Route::get('categoria/search', 'CategoriaController@search');
Route::get('categoria/projetos/{id}', 'CategoriaController@projetos');

Route::get('opiniao/create/{id}', ['middleware' => 'auth', 'uses' => 'OpiniaoController@create']);
Route::post('opiniao', ['middleware' => 'auth', 'uses' => 'OpiniaoController@store']);

Route::get('projeto/create', ['middleware' => 'auth', 'uses' => 'ProjetoController@create']);
Route::post('projeto', ['middleware' => 'auth', 'uses' => 'ProjetoController@store']);
Route::get('projeto/search', 'ProjetoController@search');
Route::get('projeto/aprove/{id}', 'ProjetoController@aprove');

Route::auth();

Route::get('/home', 'HomeController@index');
