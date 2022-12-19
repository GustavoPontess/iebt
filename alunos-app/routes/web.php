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

Route::get('/incluir', "App\Http\Controllers\UsersController@incluir")->name('incluir');
Route::get('/editar', "App\Http\Controllers\UsersController@editar")->name('editar');
Route::get('/ver', "App\Http\Controllers\UsersController@ver")->name('ver');
Route::get('/apagar', "App\Http\Controllers\UsersController@apagar")->name('apagar');
Route::get('/salvar', "App\Http\Controllers\UsersController@salvar")->name('salvar');

//Router::resource('posts', 'UsersController'); //??