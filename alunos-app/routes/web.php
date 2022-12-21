<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use Illuminate\Routing\Router;

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

Route::get('/create', "App\Http\Controllers\UsersController@create")->name('create');
Route::get('/store', "App\Http\Controllers\UsersController@store")->name('store');
Route::get('/index', "App\Http\Controllers\UsersController@index")->name('index');
Route::get('/editSpecific/{matricula}/{name}', "App\Http\Controllers\UsersController@editSpecific")->name('editSpecific');
Route::get('/update', "App\Http\Controllers\UsersController@update")->name('update');
Route::get('/destroy/{matricula}', "App\Http\Controllers\UsersController@destroy")->name('destroy');
Route::get('/edit', "App\Http\Controllers\UsersController@edit")->name('edit');



//Route::resource('alunos', UsersController::class); //??
