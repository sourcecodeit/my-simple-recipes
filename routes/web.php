<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\RecipesController::class, 'index'])->name('recipes');