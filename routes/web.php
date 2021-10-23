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

Route::get('/', function () {
    //return view('welcome');
    return "Teste git";
});

Route::get('local/{id}', [TesteController::class, 'show_local']);

Route::get('computer/{id}', [TesteController::class, 'show_computer']);

Route::get('monitor/{id}', [TesteController::class, 'show_monitor']);

Route::get('usbdevices/{id}', [TesteController::class, 'show_usb_device']);