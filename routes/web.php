<?php

use App\Http\Controllers\CounterController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('');
});

Route::get('counter', [CounterController::class, 'index'])
    ->name('counter.index');