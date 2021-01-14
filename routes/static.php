<?php

use App\Http\Controllers\StatisticsController;
use Illuminate\Support\Facades\Route;

// Header.
Route::view('/about', 'components.about')->name('about');
Route::get('/statistics', StatisticsController::class)->name('statistics');
Route::view('/license', 'components.license')->name('license');

// Sidebar.
Route::view('/settings', 'components.settings')->name('settings');
Route::view('/api', 'components.api-docs')->name('api.docs');

// Footer.
Route::view('/privacy-policy', 'components.privacy-policy')->name('privacy-policy');
Route::view('/terms-of-service', 'components.terms-of-service')->name('terms-of-service');
