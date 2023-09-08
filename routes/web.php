<?php

use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoUserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SessionsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/storage', function () {
    Artisan::call('storage:link');
});

Route::group(['prefix' => 'register'], function () {
    Route::post('/createuser', [RegisterController::class, 'create']);
	Route::post('/createmember', [MemberController::class, 'create']);
	Route::post('/createcategory', [CategoryController::class, 'create']);
	Route::post('/createfile', [FileController::class, 'create']);
	Route::post('/uploadlogo', [LogoController::class, 'create']);
});

Route::group(['prefix' => 'modify'], function () {
    Route::post('/edituser', [RegisterController::class, 'update']);
	Route::post('/editmember', [MemberController::class, 'update']);
	Route::post('/editcategory', [CategoryController::class, 'update']);
	Route::post('/editfile', [FileController::class, 'update']);
});

Route::group(['prefix' => 'delete'], function () {
    
	Route::post('/removecategory', [CategoryController::class, 'delete']);
	Route::post('/removefile', [FileController::class, 'delete']);
	Route::post('/removeuser', [RegisterController::class, 'delete']);
	Route::post('/removemember', [MemberController::class, 'delete']);
	
});

Route::group(['prefix' => 'search'], function () {
    
	Route::post('/user', [SearchController::class, 'user']);
	Route::post('/member', [SearchController::class, 'member']);
	Route::post('/category', [SearchController::class, 'category']);
	Route::post('/file', [SearchController::class, 'file']);
	Route::post('/allfiles', [SearchController::class, 'allfiles']);
	
});

Route::get('/', [HomeController::class, 'guest'])->name('guest');

Route::group(['middleware' => 'auth'], function () {

    
	Route::get('/dashboard', [HomeController::class, 'home'])->name('dashboard');

	Route::get('/user-management', [HomeController::class, 'allusers'])->name('user-management');

	Route::get('/SB-Members', [HomeController::class, 'sbmember'])->name('sbmember');

	Route::get('/file-manager', [HomeController::class, 'filemanager'])->name('filemanager');

	Route::get('/all-files', [HomeController::class, 'allfiles'])->name('all-files');

    Route::get('static-sign-in', function () {
		return view('static-sign-in');
	})->name('sign-in');

    Route::get('static-sign-up', function () {
		return view('static-sign-up');
	})->name('sign-up');

    Route::get('/logout', [SessionsController::class, 'destroy']);
	Route::get('/user-profile', [InfoUserController::class, 'create']);
	Route::post('/user-profile', [InfoUserController::class, 'store']);
    Route::get('/login', function () {
		return view('dashboard');
	})->name('sign-up');
});



Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [RegisterController::class, 'create']);
    Route::post('/register', [RegisterController::class, 'store']);
    Route::get('/login', [SessionsController::class, 'create']);
    Route::post('/session', [SessionsController::class, 'store']);
	Route::get('/login/forgot-password', [ResetController::class, 'create']);
	Route::post('/forgot-password', [ResetController::class, 'sendEmail']);
	Route::get('/reset-password/{token}', [ResetController::class, 'resetPass'])->name('password.reset');
	Route::post('/reset-password', [ChangePasswordController::class, 'changePassword'])->name('password.update');

});

Route::get('/login', [SessionsController::class, 'create'])->name('login');