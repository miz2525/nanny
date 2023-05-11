<?php

use App\Http\Controllers\Website\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Run Artisan Commands Using Url
Route::get('clear_cache', function () {
    \Illuminate\Support\Facades\Artisan::call('cache:clear');
    dd("Cache is cleared");
});


Route::get('multiple-image', function(){
    return view('admin.multiple-image');
});

Route::post('upload-multiple-image', [HomeController::class,'uploadMultipleImage'])->name('upload-multiple-image');


Auth::routes();

Route::prefix('admin')->name('admin.')->middleware('guest:admin')->group(function(){
    Route::get('/login',[\App\Http\Controllers\Admin\Auth\LoginController::class,'login'])->name('login');
    Route::post('/login',[\App\Http\Controllers\Admin\Auth\LoginController::class,'processLogin']);
});