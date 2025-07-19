<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\AdminAuthController;
use App\Http\Controllers\Admin\Category\AdminCategoryController;
use App\Http\Controllers\Admin\Dashboard\AdminDashboardController;
use App\Http\Controllers\Admin\FoodItem\FoodItemController;

Route::middleware(['guest:admin'])->group(function () {
    Route::match(['get', 'post'], 'login', [AdminAuthController::class, 'login'])->name('login');
});


Route::middleware(['revalidateSession', 'auth:admin'])->group(function () {
    Route::get('logout', [AdminAuthController::class, 'logout'])->name('logout');
    Route::get('dashboard', [AdminDashboardController::class, 'dashboard'])->name('dashboard');


    // category routes
    Route::get('category/toggleStatus/{uuid}', [AdminCategoryController::class, 'toggleStatus'])->name('category.toggleStatus');
    Route::resource('category', AdminCategoryController::class);

    // fooditem routes
    Route::resource('fooditem', FoodItemController::class);
    Route::get('toggleStatus/{uuid}', [FoodItemController::class, 'toggleStatus'])->name('food.toggleStatus');
});
