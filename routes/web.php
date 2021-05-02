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
    Route::get('/', [App\Http\Controllers\Admin\User\UserController::class, 'index'])->name('user');
    Route::get('/create', [App\Http\Controllers\Admin\User\UserController::class, 'createUser'])->name('create-user');
    Route::get('/detail', [App\Http\Controllers\Admin\User\UserController::class, 'detailUser'])->name('detail-user');
});

Route::prefix('employee')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\Employee\EmployeeController::class, 'index'])->name('employee');
    Route::get('/create', [App\Http\Controllers\Admin\Employee\EmployeeController::class, 'createEmployee'])->name('create-employee');
    Route::get('/detail', [App\Http\Controllers\Admin\Employee\EmployeeController::class, 'detailEmployee'])->name('detail-employee');
    Route::post('/store', [App\Http\Controllers\Admin\Employee\EmployeeController::class, 'saveEmployee'])->name('store-employee');
});
