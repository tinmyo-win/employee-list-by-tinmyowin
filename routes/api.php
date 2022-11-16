<?php

use App\Http\Controllers\Api\EmployeeController;
use App\Http\Controllers\Api\UserAuthController;
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

Route::post('register', [UserAuthController::class, 'register']);
Route::post('login', [UserAuthController::class, 'login']);

Route::get('employee/{id}', [EmployeeController::class, 'detail'])->middleware('auth:api');
    Route::get('employee', [EmployeeController::class, 'index'])->middleware('auth:api');

    Route::post('employee', [EmployeeController::class, 'add'])->middleware('auth:api');
    Route::put("employee/{id}", [EmployeeController::class, 'update'])->middleware('auth:api');
    Route::delete("employee/{id}", [EmployeeController::class, 'delete'])->middleware('auth:api');



