<?php

use App\Models\Periksa;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/dokter', function () {
    $periksas = Periksa::all();
    return view('dokter.dashboard', compact('periksas'));
});

Route::get('/pasien', function () {
    return view('pasien.dashboard');
});

