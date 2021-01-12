<?php

use App\Http\Controllers\AcademyController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserController;
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

Route::get('/', IndexController::class)->name('/');

Route::resource('academies', AcademyController::class);
Route::resource('users', UserController::class);

Route::patch('academies/{academy}/verify', [AcademyController::class, 'verify'])->name('academies.verify');
Route::get('users/{user}/academies', [UserController::class, 'showAcademies'])->name('users.academies');

require __DIR__.'/auth.php';
require __DIR__.'/static.php';
