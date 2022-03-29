<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('utama');

Route::get('/tentang', function(){
    return view('about');
})->name('tentang-saya');

Route::get('/profile', [ProfileController::class, 'index']);

Route::get('/profile/saya', [ProfileController::class, 'saya'])->name('saya');












Route::get('/nama/saya', function(){
    return 'Pahrul Irfan';
});

Route::get('/dari-view', function () {
    return view('home');
});
