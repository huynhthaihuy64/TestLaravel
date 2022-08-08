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
Route::get('/admin/confirm/list', [ConfirmController::class, 'index'])->name('confirm.list');
Route::get('/admin/user/list', [UserController::class, 'index'])->name('user.list');
Route::get('/admin/cv/list', [CvController::class, 'index'])->name('cv.list');
Route::get('/admin/index', [UserController::class, 'check'])->name('admins.index');
Route::get('/index/login', [PageController::class, 'login'])->name('login');
Route::post('/index/login', [PageController::class, 'postLogin'])->name('postLogin');
Route::get('/index/register', [PageController::class, 'register'])->name('register');
Route::post('/index/register', [PageController::class, 'store'])->name('store');
Route::get('subscribe/{email}', [SubscriberController::class, 'sendEmail']);
// Route::middleware(['auth'])->group(function () {

//     Route::prefix('admin')->group(function () {
//         Route::get('/admin/index', [UserController::class, 'check'])->name('check');
//     });
// });
