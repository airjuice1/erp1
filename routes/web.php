<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;

Route::get('/', [WelcomeController::class, 'index']);
Route::resource('/page', PageController::class);
