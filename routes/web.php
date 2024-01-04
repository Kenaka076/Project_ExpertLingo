<?php
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Student1Controller;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\GuruController;

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

Route::get('/kursus', [IndexController::class,'kursus'])->name('kursus');

Route::get('/payment', [IndexController::class,'payment'])->name('payment');

Route::get('/admin', [JadwalController::class, 'index']);
Route::get('admin/student', [Student1Controller::class, 'index'])->name('students.index');
Route::get('admin/guru', [GuruController::class, 'index'])->name('guru.index');
    Route::get('admin/addguru', [GuruController::class, 'create'])->name('guru.create');
    Route::post('admin/addguru', [GuruController::class, 'store'])->name('guru.store');
    Route::get('admin/guru/{guru}/edit', [GuruController::class, 'edit'])->name('guru.edit');
    Route::put('admin/guru/{guru}', [GuruController::class, 'update'])->name('guru.update');
    Route::delete('admin/guru/{guru}', [GuruController::class, 'destroy'])->name('guru.destroy');
Route::get('admin/jadwal', [JadwalController::class, 'index'])->name('jadwal.index');
    Route::get('admin/jadwal/addjadwal', [JadwalController::class, 'create'])->name('jadwal.create');
    Route::post('admin/jadwal/addjadwal', [JadwalController::class, 'store'])->name('jadwal.store');
    Route::get('admin/jadwal/{jadwal}/edit', [JadwalController::class, 'edit'])->name('jadwal.edit');
    Route::put('admin/jadwal/{jadwal}', [JadwalController::class, 'update'])->name('jadwal.update');
    Route::delete('admin/jadwal/{jadwal}', [JadwalController::class, 'destroy'])->name('jadwal.destroy');
Route::resource('admin/jadwal', JadwalController::class);
Route::resource('admin/student', Student1Controller::class);
Route::resource('admin/guru', GuruController::class);