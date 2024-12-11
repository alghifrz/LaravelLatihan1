<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/signin', function () {
   return view('signin'); 
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/home', function () {
    return 'Home Page';
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/blogpost/{blogId}', function ($blogId) {
    $title = request()->query('title', 'Default Title');
    $content = request()->query('content', 'Default Content');
    
    return view('blogpost', compact('blogId', 'title', 'content'));
});

Route::get('/category', function () {
    return 'Category Page';
});

Route::get('/author', function () {
    return 'Author Page';
});

Route::get('/privacypolicy', function () {
    return 'Privacy Policy Page';
});