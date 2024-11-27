<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;

Route::middleware('auth')->prefix('recipes')->name('recipes.')->group(function () {
    Route::post('search', [RecipeController::class, 'search'])->name('search');
});
