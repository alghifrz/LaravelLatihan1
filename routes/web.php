<?php

use App\Http\Middleware\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home');
})->middleware(Auth::class);

Route::get('/signin', [UserController::class, 'showLoginForm']);
// Route::post('/signin', [UserController::class, 'login']);

Route::get('/signup', [UserController::class, 'showRegisterForm']);
Route::post('/signup', [UserController::class, 'register']);

Route::get('/profile', [UserController::class, 'profile'])->middleware('auth');

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


Route::get('/admin', function () {
    return 'Admin Page';
});

Route::post('/profile', function () {
    return 'Welcome to your profile!';
});

Route::get('/profile', function () {
    return 'Welcome to your profile!';
})->middleware('auth');

Route::post('/signin', [UserController::class, 'login']);


