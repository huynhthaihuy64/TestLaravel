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

//Page
Route::get('/index/login', [PageController::class, 'login'])->name('login');
Route::post('/index/login', [PageController::class, 'postLogin'])->name('postLogin');
Route::get('/index/register', [PageController::class, 'register'])->name('register');
Route::post('/index/register', [PageController::class, 'store'])->name('register.store');
Route::get('/index/submit-cv', [CvController::class, 'create'])->name('cvs.create');
Route::post('/index/submit-cv', [CvController::class, 'store'])->name('cvs.store');
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
            Route::get('list', [UserController::class, 'index'])->name('users.list');
            Route::get('edit/{id}', [UserController::class, 'show'])->name('users.show');
            Route::post('edit/{id}', [UserController::class, 'update'])->name('users.update');
            Route::get('delete/{id}', [UserController::class, 'destroy'])->name('users.del'); //Muốn dùng Route::delete thì ở form action nên thêm route và @method 'Delete'
        });
        //CV
        Route::prefix('cv')->group(function () {
            Route::get('list', [CvController::class, 'index'])->name('cvs.list');
            Route::get('edit/{id}', [CvController::class, 'show'])->name('cvs.show');
            Route::post('edit/{id}', [CvController::class, 'update'])->name('cvs.update');
            Route::get('delete/{id}', [CvController::class, 'destroy'])->name('cvs.del');
            Route::get('mail/{email}', [CvController::class, 'sendmail'])->name('cvs.mail');
        });
        //Confirm
        Route::prefix('confirm')->group(function () {
            Route::get('list', [ConfirmController::class, 'index'])->name('confirms.list');
            Route::get('create', [ConfirmController::class, 'create'])->name('confirms.create');
            Route::post('create', [ConfirmController::class, 'store'])->name('confirms.store');
            Route::get('delete/{id}', [ConfirmController::class, 'destroy'])->name('confirms.del');
            Route::get('mail/{email}&&{date}', [ConfirmController::class, 'acceptInterview'])->name('confirms.accept');
            Route::get('mail/pass/{email}&&{name}', [ConfirmController::class, 'passInterview'])->name('confirms.pass');
            Route::get('mail/fail/{email}&&{name}', [ConfirmController::class, 'failInterview'])->name('confirms.fail');
        });
    });
});
