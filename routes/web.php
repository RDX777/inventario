<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Teste\TesteController;

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

Route::get('bootstrap', [TesteController::class, 'show'])->name('teste.bootstrap');


Route::get('/', function () {
    //return view('welcome');
    return "Teste de sistema de inventario - versão demostração - Alpha not Omega
        <br>
        /computer/ + id
        <br>
        /local/ + id
        <br>
        /monitor/ + id
        <br>
        /usbdevice/ + id

        <br>
        /bootstrap

        <br>

        Is not a API, only a html test.
        ";
});

Route::get('local/{id}', [TesteController::class, 'show_local']);

Route::get('computer/{id}', [TesteController::class, 'show_computer']);

Route::get('monitor/{id}', [TesteController::class, 'show_monitor']);

Route::get('usbdevice/{id}', [TesteController::class, 'show_usb_device']);