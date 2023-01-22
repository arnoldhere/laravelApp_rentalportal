<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\userController;
use App\Models\userModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [homeController::class, 'login'])->name('login');

Route::get('/login', [homeController::class, 'login'])->name('login');

Route::get('/signup', [homeController::class, 'signup'])->name('signup');

Route::post('/signupUser', [homeController::class, 'signupUser'])->name('signupUser');

Route::post('/loginuser', [homeController::class, 'loginuser'])->name('loginuser');


Route::middleware('auth')->group(function () {

    // for admin
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/', [adminController::class, 'dashboard'])->name('dashboard');
    });

    // for users
    Route::prefix('user')->name('user.')->group(function(){
        Route::get('/',[userController::class,'index'])->name('index');
    });
});
