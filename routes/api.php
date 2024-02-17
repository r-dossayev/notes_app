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
    Route::get('/{note}', 'NoteController@show');
    Route::group(['middleware' => 'auth'], function () {
        Route::post('/', 'NoteController@store');
        Route::put('/{note}', 'NoteController@update')->can('update', 'note');
        Route::delete('/{note}', 'NoteController@destroy')->can('delete', 'note');
    });
});
