<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () { return view('auth.login'); });

Auth::routes();

Route::prefix('attendance')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\Attendance\AttendanceController::class, 'index'])->name('attendance');
});

Route::prefix('user')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\User\UserListController::class, 'index'])->name('user');
    Route::get('/create', [App\Http\Controllers\Admin\User\UserListController::class, 'createUser'])->name('create-user');
    Route::get('/detail', [App\Http\Controllers\Admin\User\UserListController::class, 'detailUser'])->name('detail-user');
});

Route::prefix('employee')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\Attendance\AttendanceController::class, 'index'])->name('employee');
});
