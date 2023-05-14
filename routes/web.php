<?php

use App\Http\Controllers\Website\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Cashier\Cashier;

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

Auth::routes();

Route::prefix('admin')->name('admin.')->middleware('guest:admin')->group(function(){
    Route::get('/login',[\App\Http\Controllers\Admin\Auth\LoginController::class,'login'])->name('login');
    Route::post('/login',[\App\Http\Controllers\Admin\Auth\LoginController::class,'processLogin']);
});