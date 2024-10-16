<?php

use Gemini\Data\Blob;
use Gemini\Data\GenerationConfig;
use Gemini\Enums\MimeType;
use Illuminate\Support\Facades\Route;
use Gemini\Laravel\Facades\Gemini;


Route::get('/', function () {
    return view('index');
});


Route::get('/about', function () {
   return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/article', function () {
    return view('article');
});

Route::get('/blog', function () {
   return view('blog');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/portfolio-details', function () {

    return view('portfolio-details');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/document', function () {
    return view('document-transaction');
});
