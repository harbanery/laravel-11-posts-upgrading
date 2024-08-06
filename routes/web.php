<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog Page', 'posts' => Post::all()]);
});

Route::get('/posts/{slug}', function ($slug) {
    return view('post', ['title' => 'Single Post', 'post' => Post::find($slug)]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Me', 'name' => 'Raihan Yusuf']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});
