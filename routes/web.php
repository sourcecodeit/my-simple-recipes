<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/recipes', [App\Http\Controllers\RecipesController::class, 'index'])->name('recipes.index');