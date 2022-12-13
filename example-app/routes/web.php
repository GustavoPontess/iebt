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

Route::get('/ola-mundo', "App\Http\Controllers\OlaMundoController@ola");

Route::get('/incluir', "App\Http\Controllers\AlunoController@incluir");
Route::get('/editar', "App\Http\Controllers\AlunoController@editar");
Route::get('/ver', "App\Http\Controllers\AlunoController@ver");
Route::get('/apagar', "App\Http\Controllers\AlunoController@apagar");

