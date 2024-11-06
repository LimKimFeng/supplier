<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SuplierController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index'])->name('name');
Route::get('/suplier/index', [SuplierController::class, 'index'])->name('suplier.index');
Route::get('/suplier/create', [SuplierController::class, 'create'])->name('suplier.create');
Route::get('/suplier/edit', [SuplierController::class, 'edit'])->name('suplier.edit');


