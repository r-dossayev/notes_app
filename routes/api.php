<?php

use App\Http\Controllers\Api\NoteController;
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
    Route::get('/', [NoteController::class, 'index']);
    Route::get('/{note}', [NoteController::class, 'show']);
    Route::group(['middleware' => 'auth'], function () {
        Route::post('/', [NoteController::class, 'store']);
        Route::put('/{note}', [NoteController::class, 'update'])->can('update', 'note');
        Route::delete('/{note}', [NoteController::class, 'destroy'])->can('delete', 'note');
    });
});
