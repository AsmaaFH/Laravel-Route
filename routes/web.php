<?php

use App\Http\Controllers\HiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home/{id}', [HiController::class, 'all']);
Route::get('data', [HiController::class, 'show']);
Route::post('data', [HiController::class, 'store'])->name('saveData');
