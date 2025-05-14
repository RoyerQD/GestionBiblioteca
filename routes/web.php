<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\BookController;
use app\Http\Controllers\LoanController;

Route::get('/', function () {
    return view('welcome');
});
Route::middleware(['auth'])->group(function () {
    Route::resource('books', BookController::class);
    Route::resource('loans', LoanController::class);
});