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
Route::get('/all-nannies/latest-added', [NannyController::class,'latest_added'])->name('all-nannies.latest-added');
Route::get('/nanny/profile/{id}', [NannyController::class,'profile'])->name('nanny.profile');
Route::get('/pricing', [PricingController::class,'index'])->name('pricing');
Route::get('/contact-us', [HomeController::class,'contact_us'])->name('contact-us');
Route::get('/terms', [HomeController::class,'terms'])->name('terms');
Route::get('/privacy-policy', [HomeController::class,'privacy_policy'])->name('privacy-policy');
Route::get('/ethical-considerations-for-hiring-a-nanny', [HomeController::class,'ethical_considerations_for_hiring_a_nanny'])->name('ethical-considerations-for-hiring-a-nanny');
Route::get('/eligibility-criteria-for-hiring-a-nanny', [HomeController::class,'eligibility_criteria_for_hiring_a_nanny'])->name('eligibility-criteria-for-hiring-a-nanny');


Route::get('purchase/{price_id}', [HomeController::class,'purchase'])->name('purchase');
Route::get('checkout-success', [HomeController::class,'checkout_success'])->name('checkout-success');
Route::get('checkout-cancel', [HomeController::class,'checkout_cancel'])->name('checkout-cancel');