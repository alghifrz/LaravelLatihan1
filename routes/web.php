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
    $blogId = request()->query('id', '1');
    return view('blog', compact('blogId'));
});

Route::get('/blog/{blogId}', function ($blogId) {
    return view('blog', compact('blogId'));
});

Route::get('/blogpost/{blogId}', function ($blogId) {
    $title = request()->query('title', 'Default Title');
    $content = request()->query('content', 'Default Content');
    
    return view('blogpost', compact('blogId', 'title', 'content'));
});

Route::get('/category/{categoryId}', function ($categoryId) {
    return 'Category Page : '.$categoryId;
});

Route::get('/author/{authorId}', function ($authorId) {
    return 'Author Page : '.$authorId;
});

Route::get('/privacypolicy', function () {
    return 'Privacy Policy Page';
});