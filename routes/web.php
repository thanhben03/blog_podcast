<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/about', function () {
    return view('about');
})->name('about');


Route::get('/author', function () {
    return view('author');
});


Route::get('/category', function () {
    return view('category');
});

Route::get('/category-big', function () {
    return view('category-big');
});


Route::get('/category-grid', function () {
    return view('category-grid');
});


Route::get('/category-metro', function () {
    return view('category-metro');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/home2', function () {
    return view('home2');
});

Route::get('/home3', function () {
    return view('home3');
});

Route::get('/search', function () {
    return view('search');
});

Route::get('/single', function () {
    return view('single');
});

Route::get('/single-audio', function () {
    return view('single-audio');
});

Route::get('/single-full', function () {
    return view('single-full');
});

Route::get('/single-gallery', function () {
    return view('single-gallery');
});

Route::get('/single-image', function () {
    return view('single-image');
});

Route::get('/single-video', function () {
    return view('single-video');
});

Route::get('/typography', function () {
    return view('typography');
});

Route::get('/podcast', function () {
    return view('podcast');
});


Route::get('/404', function () {
    return view('404');
});
