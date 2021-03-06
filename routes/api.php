<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\PartController;
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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/signin', [AuthController::class, 'signin']);
Route::post('/signup', [AuthController::class, 'signup']);
Route::middleware('guest:api')->group(function(){
    Route::resource('/parts', PartController::class);
} );

Route::middleware('auth:api')->group(function(){
    Route::post('/parts/add', [PartController::class, 'store']);
} );