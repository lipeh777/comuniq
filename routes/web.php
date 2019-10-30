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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//rotas de chamado

Route::get('/chamado', 'ChamadoController@index')->name('chamado_list');
Route::get('/chamado', 'ChamadoController@create')->name('chamado_form');
Route::get('/chamado', 'ChamadoController@store')->name('chamado_formSave');

Route::resource('/observador', 'ObservadorController');