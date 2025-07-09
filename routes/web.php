<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/boats', function () {
    return view('boats');
});
Route::get('/events', function () {
    return view('events');
});
Route::get('/blog',function(){
    return view('blog');
});
Route::get('/blog/{id}', function ($id) {
    // İleride burada blog verisi çekilebilir
    return view('blog-detail');
});

Route::get('/boats/{id}', function ($id) {
    // In the future, fetch boat by $id
    return view('boat-detail');
});

Route::get('/contact', function(){
    return view('contact');
});
Route::get('/login', function () {
    return view('login');
});