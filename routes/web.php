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

Route::get('/events/{id}', function ($id) {
    // İleride burada event verisi çekilebilir
    return view('event-detail');
});


Route::get('/contact', function(){
    return view('contact');
});
Route::get('/login', function () {
    return view('login');
});

// Admin Routes
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
    
    Route::get('/boats', function () {
        return view('admin.boats.index');
    });
    
    Route::get('/boats/create', function () {
        return view('admin.boats.create');
    });
    
    Route::get('/events', function () {
        return view('admin.events.index');
    });
    
    Route::get('/events/create', function () {
        return view('admin.events.create');
    });
    
    Route::get('/events/{id}/edit', function ($id) {
        return view('admin.events.edit');
    });
    
    Route::get('/boats', function () {
        return view('admin.boats.index');
    });
    
    Route::get('/boats/create', function () {
        return view('admin.boats.create');
    });
    
    Route::get('/boats/{id}/edit', function ($id) {
        return view('admin.boats.edit');
    });
    
    Route::get('/boats/{id}', function ($id) {
        return view('admin.boats.show');
    });
    
    Route::get('/reservations', function () {
        return view('admin.reservations.index');
    });
    
    Route::get('/reservations/create', function () {
        return view('admin.reservations.create');
    });
    
    Route::get('/reservations/{id}', function ($id) {
        return view('admin.reservations.show');
    });
    
    Route::get('/reservations/{id}/edit', function ($id) {
        return view('admin.reservations.edit');
    });
    
    Route::get('/reservations/{id}/invoice', function ($id) {
        return view('admin.reservations.invoice');
    });
    
    Route::get('/reservations/{id}/report', function ($id) {
        return view('admin.reservations.report');
    });
    
    Route::get('/users', function () {
        return view('admin.users.index');
    });
    
    Route::get('/blog', function () {
        return view('admin.blog.index');
    });
    
    Route::get('/blog/create', function () {
        return view('admin.blog.create');
    });
    
    Route::get('/blog/{id}', function ($id) {
        return view('admin.blog.show');
    });
    
    Route::get('/blog/{id}/edit', function ($id) {
        return view('admin.blog.edit');
    });
    
    Route::get('/settings', function () {
        return view('admin.settings.index');
    });
    
    // Bildirim Routes
    Route::get('/notifications', function () {
        return view('admin.notifications.index');
    });
    
    Route::get('/notifications/settings', function () {
        return view('admin.notifications.settings');
    });
    
    Route::get('/notifications/templates', function () {
        return view('admin.notifications.templates');
    });
    
    Route::get('/notifications/logs', function () {
        return view('admin.notifications.logs');
    });
    
    // Rapor Routes
    Route::get('/reports', function () {
        return view('admin.reports.index');
    });
    
    Route::get('/reports/sales', function () {
        return view('admin.reports.sales');
    });
    
    Route::get('/reports/reservations', function () {
        return view('admin.reports.reservations');
    });
});