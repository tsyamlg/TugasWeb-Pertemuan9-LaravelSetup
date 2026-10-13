<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    $kontak = [
        'email'   => 'nama@email.com',
        'telepon' => '0812-3456-7890',
        'alamat'  => 'Medan, Sumatera Utara',
    ];

    return view('contact', ['kontak' => $kontak]);
});