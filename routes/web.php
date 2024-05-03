<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;

Route::get('/', function () { return view('welcome'); })->name('Home');

Route::resource('barangs', BarangController::class);
