<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Beranda']);
});

Route::get('/artikel', function () {
    return view('artikel', ['title' => 'Artikel']);
});

Route::get('/services', function () {
    return view('services', ['title' => 'Services']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});