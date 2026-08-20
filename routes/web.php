<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;


Route::get('/', [HomeController::class, 'showPage'])->name('home');

