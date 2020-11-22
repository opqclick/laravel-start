<?php

use App\Http\Controllers\User\UserDashboardController;
use App\Http\Controllers\Administrator\AdministratorDashboardController;
use App\Http\Controllers\AuthController;
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
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('login', [AuthController::class, 'getLogin'])->name('login');
Route::post('login', [AuthController::class, 'postLogin'])->name('login');

Route::get('forgot-password', [AuthController::class, 'getForgotPassword'])->name('forgot-password');
Route::post('forgot-password', [AuthController::class, 'postForgotPassword'])->name('forgot-password');

Route::middleware(['auth'])->group(function () {
    Route::match(['get', 'post'],'logout', [AuthController::class, 'postLogout'])->name('logout');

    Route::middleware(['administrator'])->group(function (){
        Route::prefix('administrator')->group(function () {
            Route::name('administrator.')->group(function () {
                Route::get('dashboard', [AdministratorDashboardController::class, 'show'])->name('dashboard');
            });
        });

    });

    Route::middleware(['user'])->group(function (){
        Route::prefix('user')->group(function () {
            Route::name('user.')->group(function () {
                Route::get('dashboard', [UserDashboardController::class, 'show'])->name('dashboard');
            });
        });

    });



});
