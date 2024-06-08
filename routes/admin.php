<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['admin'])->group(function () {

    Route::prefix('admin')->name('admin.')->group(function () {
        Route::view('/dashboard', 'admin.dashboard')->name('dashboard');
        Route::view('/monthly-expences', 'admin.monthly_expences')->name('monthly.expences');
    });
});
