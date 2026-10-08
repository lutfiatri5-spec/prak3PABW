<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BanjirController;

Route::get('/laporbanjir', [BanjirController::class, 'form'])
    ->name('laporan.form');

Route::post('/laporbanjir/proses', [BanjirController::class, 'proses'])
    ->name('laporan.proses');

Route::get('/laporan', [BanjirController::class, 'index'])
    ->name('laporan.index');