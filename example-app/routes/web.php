<?php

use Illuminate\Support\Facades\Route;
use App\Models\Student;

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

Route::get('/incluir', "App\Http\Controllers\AlunoController@incluir");
Route::get('/editar/{id}', "App\Http\Controllers\AlunoController@editar");
Route::get('/ver', "App\Http\Controllers\AlunoController@ver");
Route::get('/apagar/{id}', "App\Http\Controllers\AlunoController@apagar");
Route::get('/salvar', "App\Http\Controllers\AlunoController@salvar")->name('salvar');
Route::get('/alterar', "App\Http\Controllers\AlunoController@alterar")->name('alterar');