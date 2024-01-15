<?php

use App\Http\Controllers\HomeController;

use App\Http\Controllers\NavController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Models\Contact;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QuestionCategoryController;
use App\Http\Controllers\FAQCategoryController;
use App\Http\Controllers\FAQController;




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


Route::get('/home', [HomeController::class,'redirect'])->name('redirect');


//nav



Route::resource('/cars', CarsController::class);

//for admins
Route::get('/Admin/add-car', [App\Http\Controllers\CarsController::class, 'create'])->name('add-car');
Route::get('Admin/delete-cars/{id}', [App\Http\Controllers\CarsController::class, 'destroy'])->name('delete-cars');
Route::get('Admin/edit-car/{id}', [CarsController::class, 'edit'])->name('edit-car');
Route::put('Admin/update-car/{id}', [CarsController::class, 'update'])->name('update-car');
Route::get('/Admin/contact',  [ContactController::class, 'index'])->name('index');
Route::get('Admin/panel', [UserController::class, 'index'])->name('admin-panel');
Route::delete('Admin/user/{id}', [UserController::class, 'destroy'])->name('user.destroy');
Route::patch('Admin/user/{id}', [UserController::class, 'promote'])->name('user.promote');
Route::get('/CreateCars', [App\Http\Controllers\CarsController::class, 'create'])->name('CreateCars');








//for admin and users but if admin set /admin/
Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/car', [App\Http\Controllers\CarsController::class, 'index'])->name('car');
Route::get('/welcome', [App\Http\Controllers\NavController::class, 'welcome'])->name('welcome');
Route::get('/about', [App\Http\Controllers\NavController::class, 'about'])->name('about');
Route::get('/contact', [App\Http\Controllers\NavController::class, 'contact'])->name('contact');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');



//for users
Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contact',  [ContactController::class, 'store'])->name('contact.store');
Route::get('/car/{id}', [App\Http\Controllers\CarsController::class, 'show'])->name('car-details');
Route::put('/rent-car/{id}', [CarsController::class, 'rentCar'])->name('rent-car');
Route::put('/return-car/{id}', [CarsController::class, 'returnCar'])->name('return-car');
Route::get('/car-details/{id}', [CarsController::class, 'carDetails'])->name('carDetails');






Route::get('/faq-categories', [FAQCategoryController::class, 'index'])->name('faq-categories.index');
Route::get('/faq-categories/create', [FAQCategoryController::class, 'create'])->name('faq-categories.create');
Route::post('/faq-categories', [FAQCategoryController::class, 'store'])->name('faq-categories.store');
Route::get('/faq-categories/{category}/edit', [FAQCategoryController::class, 'edit'])->name('faq-categories.edit');
Route::put('/faq-categories/{category}', [FAQCategoryController::class, 'update'])->name('faq-categories.update');
Route::delete('/faq-categories/{category}', [FAQCategoryController::class, 'destroy'])->name('faq-categories.destroy');

Route::get('/faq', [FAQController::class, 'index'])->name('faq.index');
Route::get('/faq/user', [FAQController::class, 'userIndex'])->name('faq.user_index');

Route::get('/faq/create', [FAQController::class, 'create'])->name('faq.create');
Route::post('/faq', [FAQController::class, 'store'])->name('faq.store');
Route::get('/faq/{faq}/edit', [FAQController::class, 'edit'])->name('faq.edit');
Route::put('/faq/{faq}', [FAQController::class, 'update'])->name('faq.update');
Route::delete('/faq/{faq}', [FAQController::class, 'destroy'])->name('faq.destroy');

Route::get('/about', function () {
    return view('about');
});