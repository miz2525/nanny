<?php

use App\Http\Controllers\Website\ContactUsController;
use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\Website\NannyController;
use App\Http\Controllers\Website\PricingController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Website Routes
|--------------------------------------------------------------------------
|
| Here is where you can register website routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/all-nannies', [NannyController::class,'index'])->name('all-nannies');
Route::get('/nanny/profile/{id}', [NannyController::class,'profile'])->name('nanny.profile');
Route::get('/pricing', [PricingController::class,'index'])->name('pricing');
Route::get('/contact-us', [ContactUsController::class,'index'])->name('contact-us');


Route::get('/run', function () {
    Artisan::call("migrate");
    Artisan::call("db:seed");
});