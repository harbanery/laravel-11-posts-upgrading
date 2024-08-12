<?php

use App\Http\Controllers\PostControllerAPI;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog Page', 'posts' => Post::filter(request(['search', 'category', 'author']))->latest()->get()]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/authors/{user}', function (User $user) {
    return view('posts', ['title' => $user->posts->count() . ' Articles by ' . $user->name, 'posts' => $user->posts]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', ['title' => 'Categories : ' . $category->name, 'posts' => $category->posts]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Me', 'name' => 'Raihan Yusuf']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});

Route::controller(PostControllerAPI::class)->group(function () {
    Route::get('/api/posts', 'index');
    Route::get('/api/posts/{post}', 'show');
    Route::post('/api/posts', 'store');
    Route::put('/api/posts/{post}', 'update');
    Route::delete('/api/posts/{post}', 'destroy');
});
