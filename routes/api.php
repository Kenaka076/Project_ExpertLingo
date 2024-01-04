<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\StudentController;
use App\Http\Controllers\API\GuruController;
use App\Http\Controllers\Api\JadwalController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('students', StudentController::class);
Route::post('/students/{id}', [StudentController::class, 'update']);
Route::resource('guru', GuruController::class);
Route::post('/guru/{id}', [GuruController::class, 'update']);
Route::resource('jadwal', JadwalController::class);
Route::post('/jadwal/{id}', [JadwalController::class, 'update']);