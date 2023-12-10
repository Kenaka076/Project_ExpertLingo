<?php
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Student1Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('frontpage.index');
});
Route::get('/index', [IndexController::class,'index'])->name('index');

Route::get('/sign_in', [IndexController::class,'sign_in'])->name('sign_in');

Route::get('/sign_up', [IndexController::class,'sign_up'])->name('sign_up');

Route::post('/sign_up', [Student1Controller::class, 'store'])->name('students1.store');

Route::get('/homepage', [IndexController::class,'homepage'])->name('homepage');

Route::get('/pilih_guru', [IndexController::class,'pilih_guru'])->name('pilih_guru');