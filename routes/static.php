<?php

use Illuminate\Support\Facades\Route;

Route::view('/license', 'components.license')->name('license');
Route::view('/privacy-policy', 'components.privacy-policy')->name('privacy-policy');
Route::view('/terms-of-service', 'components.terms-of-service')->name('terms-of-service');
