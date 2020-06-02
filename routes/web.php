<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['middleware' => 'auth'], function () {

    //Funcoes
    Route::get('/funcoes', 'FuncaoController@index')->name('funcoes');
    Route::get('/funcoes/nova', 'FuncaoController@create')->name('nova_funcao');
    Route::post('/funcoes/store', 'FuncaoController@store')->name('cadastrar_funcao');
    Route::get('/funcoes/editar/{id}', 'FuncaoController@edit')->name('editar_funcao');    
    Route::put('/funcoes/update/{id}', 'FuncaoController@update')->name('update_funcao');
    Route::get('/funcoes/excluir/{id}', 'FuncaoController@destroy')->name('excluir_funcao');
});