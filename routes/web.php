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
    //return view('welcome');
    return "Teste git";
});

Route::get('/teste', function () {
    //return view('welcome');
    return "rota teste";
});


Route::get('/teste2', function () {
    //return view('welcome');
    return "rota teste2";
});
