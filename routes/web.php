<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\userController;
use App\Models\userModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});
Route::get('/login', [homeController::class, 'login'])->name('login');
Route::get('/signup', [homeController::class, 'signup'])->name('signup');
Route::post('/signupUser', [homeController::class, 'signupUser'])->name('signupUser');
Route::post('/loginuser', [homeController::class, 'loginuser'])->name('loginuser');
Route::get('/logout', [homeController::class, 'logout'])->name('logout');
Route::get('/forgotPassword', [homeController::class, 'forgotPassword'])->name('forgotPassword');
Route::post('/setpassword', [homeController::class, 'setPassword'])->name('setPassword');
Route::get('/askOtp', [homeController::class, 'askOTP'])->name('askOtp');
Route::post('/matchOtp', [homeController::class, 'matchOtp'])->name('matchOtp');
Route::get('/sendemail', [homeController::class, 'sendEmail']);


// for admin
Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/', function () {
        return redirect()->route('admin.dashboard');
    });
    Route::get('/dashboard', [adminController::class, 'dashboard'])->name('dashboard');

    Route::get('/team', [adminController::class, 'agent'])->name('team');
    Route::post('/addAgent', [adminController::class, 'addAgent'])->name('addAgent');
    Route::get('/deleteagent/{id}', [adminController::class, 'deleteAgent'])->name('deleteagent');
    Route::get('/deleteUser/{id}', [adminController::class, 'deleteUser'])->name('deleteUser');
    Route::get('/editAgentPage/{id}', [adminController::class, 'editAgentPage'])->name('editAgentPage');
    Route::post('/editagent', [adminController::class, 'updateAgent'])->name('editagent');

    Route::get('/property', [adminController::class, 'properties'])->name('listproperty');
    Route::post('/addProperty', [adminController::class, 'addProperty'])->name('addProperty');
    Route::get('/delProperty/{id}', [adminController::class, 'deleteProperty'])->name('delProperty');

    Route::get('/reviews', [adminController::class, 'reviews'])->name('reviews');
    Route::get('/deleteReview/{id}', [adminController::class, 'deleteReview'])->name('deleteReview');
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

    Route::get('/property_grid', [userController::class, 'property_grid'])->name('property_grid');

    Route::get('/profile', [userController::class, 'showProfile'])->name('profile');
    Route::get('/editProfilePage/{id}', [userController::class, 'editProfilePage'])->name('editProfilePage');
    Route::post('/updateProfile', [userController::class, 'updateProfile'])->name('updateProfile');
});
