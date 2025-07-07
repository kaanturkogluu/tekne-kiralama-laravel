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