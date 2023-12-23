<?php

use App\Http\Controllers\HomeController;

use App\Http\Controllers\NavController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('site.welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [HomeController::class,'redirect']);

//nav
Route::get('/welcome', [App\Http\Controllers\NavController::class, 'welcome'])->name('welcome');
Route::get('/about', [App\Http\Controllers\NavController::class, 'about'])->name('about');
Route::get('/blog', [App\Http\Controllers\NavController::class, 'blog'])->name('blog');
Route::get('/blog-single', [App\Http\Controllers\NavController::class, 'blogSingle'])->name('blog-single');
Route::get('/blog', [App\Http\Controllers\NavController::class, 'blog'])->name('blog');
Route::get('/car', [App\Http\Controllers\NavController::class, 'car'])->name('car');
Route::get('/car-single', [App\Http\Controllers\NavController::class, 'carSingle'])->name('carSingle');
Route::get('/contact', [App\Http\Controllers\NavController::class, 'contact'])->name('contact');
Route::get('/pricing', [App\Http\Controllers\NavController::class, 'pricing'])->name('pricing');
Route::get('/services', [App\Http\Controllers\NavController::class, 'services'])->name('services');




