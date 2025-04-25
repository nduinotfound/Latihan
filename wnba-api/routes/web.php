<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\WNBAController;

// Route untuk mendapatkan semua tim
Route::get('api/wnba', [WNBAController::class, 'getAllTeams']);

Route::get('/', function () {
    return view('welcome');
});
