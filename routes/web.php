<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[Controller::class,'home'])->name('home');
Route::get('/about-us',[Controller::class,'aboutUs'])->name('aboutUs');
Route::get('/food-menu',[Controller::class,'foodMenu'])->name('foodMenu');
Route::get('/contact-us',[Controller::class,'contactUs'])->name('contactUs');
