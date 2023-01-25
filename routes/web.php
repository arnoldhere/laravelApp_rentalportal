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

Route::get('/logout', [homeController::class, 'logout'])->name('logout');

Route::get('/forgotPassword', [homeController::class, 'forgotPassword'])->name('forgotPassword');

Route::middleware('auth')->group(function () {

    // for admin
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/', [adminController::class, 'dashboard'])->name('dashboard');
    });

    // for users
    Route::prefix('user')->name('user.')->group(function () {
        Route::get('/', [userController::class, 'index'])->name('index');

        Route::get('/about', [userController::class, 'about'])->name('about');

        Route::get('/contact', [userController::class, 'contact'])->name('contact');
        Route::post('/contact', [userController::class, 'storeFeedback'])->name('storeFeedback');


        Route::get('/agentSingle', [userController::class, 'agent_single'])->name('agent_single');

        Route::get('/agentsGrid', [userController::class, 'agents_grid'])->name('agents_grid');

        Route::get('/blogrid', [userController::class, 'blog_grid'])->name('blog_grid');

        Route::get('/blogsingle', [userController::class, 'blog_single'])->name('blog_single');

        Route::get('/property_grid', [userController::class, 'property_grid'])->name('property_grid');

        Route::get('/property_single', [userController::class, 'property_single'])->name('property_single');
    });
});
