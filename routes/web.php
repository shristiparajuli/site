<?php

use App\Models\Testimonial;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TestimonialController;

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
//user pages// 

Route::get('/', [PagesController::class, 'welcome']);
Route::get('/contact-us', [PagesController::class, 'contact']);
Route::post('/contact-us', [ContactController::class, 'store'])->name('contacts.store');

// admin pages // 

Route::prefix('admin')->group(function () {
    Route::resource('testimonials', TestimonialController::class);
    Route::resource('teams', TeamController::Class);
    Route::resource('services', ServiceController::Class);
    Route::resource('categories', CategoryController::Class);
    Route::resource('socials', SocialController::Class);
    Route::get('contacts',[ContactController::class,'index']);
});





