<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('cv.landing');
});

require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
