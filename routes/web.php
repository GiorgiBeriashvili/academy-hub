<?php

use App\Models\Academy;
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

Route::get('/', function () {
    return redirect()->route('academies');
})->name('/');

Route::get('/academies', function () {
    return view('components.academies', ['academies' => Academy::query()->paginate(3)]);
})->name('academies');

Route::get('/academies/{academy}', function (Academy $academy) {
    return $academy;
})->name('academies.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth:sanctum'])->name('dashboard');

require __DIR__.'/auth.php';
