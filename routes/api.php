<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::prefix('notes')->group(function () {
    Route::get('/', 'NoteController@index');
    Route::post('/', 'NoteController@store');
    Route::get('/{note}', 'NoteController@show');
    // for admin
    Route::group(['middleware' => 'auth:admin'], function () {
        Route::put('/{note}', 'NoteController@update');
        Route::delete('/{note}', 'NoteController@destroy');
    });
});
