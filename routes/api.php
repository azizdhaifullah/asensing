<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('register', [App\Http\Controllers\Api\AuthController::class, 'register']);
Route::post('login', [App\Http\Controllers\Api\AuthController::class, 'login']);

Route::middleware(['client'])->group(function () {
    Route::get('test', [App\Http\Controllers\Api\Test\ApiTestController::class, 'index']);

    Route::prefix('employee')->group(function () {
        Route::get('/', [App\Http\Controllers\Api\Admin\EmployeeApiController::class, 'getEmployeeList']);
        Route::post('/insert', [App\Http\Controllers\Api\Admin\EmployeeApiController::class, 'createBulkEmployee']);
    });
});



