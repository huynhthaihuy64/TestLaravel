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
Route::get('/index/forgot', [PageController::class, 'forgot'])->name('forgot');
Route::post('/index/forgot', [PageController::class, 'postForgot'])->name('postForgot');
Route::get('/index/reset/{token}', [PageController::class, 'getPassword'])->name('getPassword');
Route::post('/index/reset/{token}', [PageController::class, 'updatePassword'])->name('updatePassword');

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
            Route::get('mail/{email}', [CvController::class, 'sendmail'])->name('cv.mail');
        });
        //Confirm
        Route::prefix('confirm')->group(function () {
            Route::get('list', [ConfirmController::class, 'index'])->name('confirm.list');
            Route::get('create', [ConfirmController::class, 'create'])->name('confirm.create');
            Route::post('create', [ConfirmController::class, 'store'])->name('confirm.store');
            Route::get('delete/{id}', [ConfirmController::class, 'destroy'])->name('confirm.del');
            Route::get('mail/{email}&&{date}', [ConfirmController::class, 'acceptInterview'])->name('confirm.accept');
            Route::get('mail/pass/{email}&&{name}', [ConfirmController::class, 'passInterview'])->name('confirm.pass');
            Route::get('mail/fail/{email}&&{name}', [ConfirmController::class, 'failInterview'])->name('confirm.fail');
        });
    });
});
