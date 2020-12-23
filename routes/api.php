<?php

use App\Http\Controllers\Api\TagController;
use App\Http\Controllers\Api\TokenController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;

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

Route::post('/token', [TokenController::class, 'store'])->name('token.store');

Route::middleware('auth:sanctum')->group(function () {
    Route::resource('tags', TagController::class);
//    Route::resource('users', UserController:class);
});
