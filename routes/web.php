<?php

use App\http\controllers\JalurController;
use App\Http\Controllers\BiodataController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Ini adalah route tanpa MVC
Route::get('/jalurbaru', function () {
    return 'Ini Jalur Baru Tanpa MVC';
});


// Ini adalah route menggunakan view
Route::get('/jalurview', function () {
    return view('viewjalur');
});

// Ini adalah route menggunakan view & contorller
Route::get('/jalurcontroller', [JalurController::class, 'index']);


// Ini adalah route menggunakan view, contorller & model
Route::get('/jalurmodel', [JalurController::class, 'menampilkanDataModel']);

// Ini adalah route menggunakan view, contorller & model
Route::get('/biodata', [BiodataController::class, 'menampilkanBiodata']);