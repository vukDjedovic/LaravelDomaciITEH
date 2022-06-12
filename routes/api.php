<?php

use App\Http\Controllers\AgencijaController;
use App\Http\Controllers\VodicController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::resource('agencija', AgencijaController::class)->only('index', 'show', 'store', 'destroy');
Route::resource('vodic', VodicController::class)->only('index', 'destroy');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
