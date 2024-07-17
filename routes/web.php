<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

Route::get('/', [ProdutoController::class, 'index'])->name('index');
Route::get('/create', [ProdutoController::class, 'create'])->name('create');
Route::post('/', [ProdutoController::class, 'store'])->name('store');
