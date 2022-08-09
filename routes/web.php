<?php

use App\Http\Controllers\ConfirmController;
use App\Http\Controllers\CvController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SubscriberController;
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

Route::get('/index', [PageController::class, 'index'])->name('index');

// // Confirm
// Route::get('/admin/confirm/list', [ConfirmController::class, 'index'])->name('confirm.list');
// Route::get('/admin/confirm/edit/{id}', [ConfirmController::class, 'show'])->name('confirm.show');
// Route::get('/admin/confirm/delete/{id}', [ConfirmController::class, 'destroy'])->name('confirm.del');

// // User
// Route::get('/admin/user/list', [UserController::class, 'index'])->name('user.list');
// Route::get('/admin/user/edit/{id}', [UserController::class, 'show'])->name('user.show');
// Route::get('/admin/user/delete/{id}', [UserController::class, 'destroy'])->name('user.del');

// //Cv
// Route::get('/admin/cv/list', [CvController::class, 'index'])->name('cv.list');
// Route::get('/admin/cv/edit/{id}', [CvController::class, 'show'])->name('cv.show');
// Route::post('/admin/cv/edit/{id}', [CvController::class, 'update'])->name('cv.update');
// Route::get('/admin/cv/delete/{id}', [CvController::class, 'destroy'])->name('cv.del');

//Page
Route::get('/index/login', [PageController::class, 'login'])->name('login');
Route::post('/index/login', [PageController::class, 'postLogin'])->name('postLogin');
Route::get('/index/register', [PageController::class, 'register'])->name('register');
Route::post('/index/register', [PageController::class, 'store'])->name('register.store');
Route::get('/index/submit-cv', [CvController::class, 'create'])->name('cv.create');
Route::post('/index/submit-cv', [CvController::class, 'store'])->name('cv.store');
Route::get('/subscribe/{email}', [SubscriberController::class, 'sendEmail'])->name('sendmail');

Route::middleware(['auth'])->group(function () {

    Route::prefix('admin')->group(function () {
        Route::get('/', [UserController::class, 'check'])->name('admins.index');
        Route::get('/logout', [PageController::class, 'logout'])->name('logout');

        // User
        Route::prefix('user')->group(function () {
            Route::get('list', [UserController::class, 'index'])->name('user.list');
            Route::get('edit/{id}', [UserController::class, 'show'])->name('user.show');
            Route::post('edit/{id}', [UserController::class, 'update'])->name('user.update');
            Route::get('delete/{id}', [UserController::class, 'destroy'])->name('user.del');
        });
        //CV
        Route::prefix('cv')->group(function () {
            Route::get('list', [CvController::class, 'index'])->name('cv.list');
            Route::get('edit/{id}', [CvController::class, 'show'])->name('cv.show');
            Route::post('edit/{id}', [CvController::class, 'update'])->name('cv.update');
            Route::get('delete/{id}', [CvController::class, 'destroy'])->name('cv.del');
        });
        //Confirm
        Route::prefix('confirm')->group(function () {
            Route::get('list', [ConfirmController::class, 'index'])->name('confirm.list');
            Route::get('delete/{id}', [ConfirmController::class, 'destroy'])->name('confirm.del');
        });
    });
});
