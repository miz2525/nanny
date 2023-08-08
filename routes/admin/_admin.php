<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\NanniesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "guest:admin" middleware group. Make something great!
|
*/

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

/** Dashboard Routes */
Route::get('/', [DashboardController::class, 'index'])->name('home');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

/** Nannies Routes */
Route::get('/all-nannies', [NanniesController::class, 'index'])->name('all-nannies');
Route::get('/latest-nannies', [NanniesController::class,'latest'])->name('latest-nannies');
Route::get('/nanny/add', [NanniesController::class, 'add'])->name('nanny.add');
Route::get('/nanny/edit/{nanny_id}', [NanniesController::class, 'edit'])->name('nanny.edit');
Route::post('/nanny/store', [NanniesController::class, 'store'])->name('nanny.store');
Route::post('/nanny/update/{nanny_id}', [NanniesController::class, 'update'])->name('nanny.update');
Route::post('/nanny/comment/store/{nanny_id}', [NanniesController::class, 'store_comment'])->name('nanny.comment.store');
Route::get('/nanny/delete_image/{image_id}', [NanniesController::class, 'delete_nanny_image'])->name('nanny.delete_image');
Route::post('/nanny/update_nanny_image/{image_id}', [NanniesController::class, 'update_nanny_image'])->name('nanny.update_nanny_image');
Route::post('/nanny/delete', [NanniesController::class, 'delete_nanny'])->name('nanny.delete');
Route::get('/load-nanny-profile/{nanny_id}', [NanniesController::class,'load_nanny_profile'])->name('load-nanny-profile');

/** Customers Routes */
Route::get('/customer', [CustomerController::class, 'index'])->name('customer');
Route::post('/customer/change-status', [CustomerController::class, 'change_status'])->name('customer.change-status');
Route::get('/payments', [CustomerController::class, 'payments'])->name('customer.payments');

