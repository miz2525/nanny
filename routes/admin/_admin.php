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
Route::get('/nanny/add', [NanniesController::class, 'add'])->name('nanny.add');
Route::get('/nanny/edit/{nanny_id}', [NanniesController::class, 'edit'])->name('nanny.edit');
Route::post('/admin/nanny/store', [NanniesController::class, 'store'])->name('nanny.store');
Route::post('/admin/nanny/update/{nanny_id}', [NanniesController::class, 'update'])->name('nanny.update');
Route::post('/nanny/comment/store/{nanny_id}', [NanniesController::class, 'store_comment'])->name('nanny.comment.store');


/** Customers Routes */
Route::get('/customer', [CustomerController::class, 'index'])->name('customer');