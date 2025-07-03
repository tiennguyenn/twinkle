<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Home;
use App\Livewire\Counter;
use App\Livewire\ShowPosts;
use App\Livewire\CreatePost;

Route::get('/', Home::class)
    ->name('home');

Route::get('/counter', Counter::class)
    ->name('counter');

Route::get('/posts', ShowPosts::class)->name('posts.index');
Route::get('/posts/create', CreatePost::class)
    ->name('posts.create');