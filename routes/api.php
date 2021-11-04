<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Teste\TesteController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('computers')->group(function () {
    
    Route::get('/find/{id}', [TesteController::class, 'find_computer_api']
    );

    Route::get('/show', [TesteController::class, 'show_api']
    );
       
});


Route::prefix('image')->group(function () {
    
    Route::get('/{id}', [TesteController::class, 'find_image_api']
    )->name('image.getImage');
       
});