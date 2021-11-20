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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register', [App\Http\Controllers\Api\AuthController::class, 'register']);
Route::post('login', [App\Http\Controllers\Api\AuthController::class, 'login']);

Route::get('test', [App\Http\Controllers\Api\Test\ApiTestController::class, 'index'])->middleware('client');

Route::prefix('asensing')->group(function () {
    Route::prefix('employee')->group(function () {
        Route::get('/', [App\Http\Controllers\Api\Admin\EmployeeApiController::class, 'getEmployeeList'])->middleware('client');
        Route::post('/insert', [App\Http\Controllers\Api\Admin\EmployeeApiController::class, 'createBulkEmployee'])->middleware('client');
    });
});

