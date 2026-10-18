<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FurnitureController;

Route::get('/', [FurnitureController::class, 'index'])->name('furniture.index');
Route::get('/furniture/{id}', [FurnitureController::class, 'show'])->name('furniture.show');