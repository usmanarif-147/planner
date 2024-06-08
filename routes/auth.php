<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use Illuminate\Support\Facades\Route;

/**
 * Admin
 */
Route::middleware('guest')->group(function () {

    Route::get('admin/login', [AuthenticatedSessionController::class, 'createAdmin'])
        ->name('admin.login');
    Route::post('admin/login', [AuthenticatedSessionController::class, 'storeAdmin'])
        ->name('admin.login.store');

    Route::get('admin/forgot-password', [PasswordResetLinkController::class, 'createAdmin'])
        ->name('admin.password.request');
    Route::post('admin/forgot-password', [PasswordResetLinkController::class, 'storeAdmin'])
        ->name('admin.password.email');

    Route::get('admin/reset-password/{token}', [NewPasswordController::class, 'createAdmin'])
        ->name('admin.password.reset');
    Route::post('admin/reset-password', [NewPasswordController::class, 'storeAdmin'])
        ->name('admin.password.store');
});

Route::middleware(['admin'])->group(function () {

    Route::get('admin/confirm-password', [ConfirmablePasswordController::class, 'showAdmin'])
        ->name('admin.password.confirm');
    Route::post('confirm-password', [ConfirmablePasswordController::class, 'storeAdmin'])
        ->name('admin.password.confirm.store');

    Route::put('admin/password', [PasswordController::class, 'updateAdmin'])
        ->name('admin.password.update');
    Route::post('admin/logout', [AuthenticatedSessionController::class, 'destroyAdmin'])
        ->name('admin.logout');
});
