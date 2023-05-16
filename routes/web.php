<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SiteController;

Route::get('/', [SiteController::class, 'homeView']);

Route::get('/style/{id}', [SiteController::class, 'styleView']);

Route::get('/comments', [SiteController::class, 'commentsView']);

Route::get('/about', [SiteController::class, 'aboutView']);