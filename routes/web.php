<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/signin', function () {
   return 'Signin Page'; 
});

Route::get('/signup', function () {
    return 'Signup Page';
});

Route::get('/home', function () {
    return 'Home Page';
});

Route::get('/blog', function () {
    return 'Blog Page';
});

Route::get('/blogpost', function () {
    return 'Blog Post Page';
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