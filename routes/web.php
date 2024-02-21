<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TutorController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\JudulController;
use App\Http\Controllers\PengajuanController;


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
    // return view('welcome');
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

// =>>> Student Controller <==//
Route::get('/student', [StudentController::class, 'index']);
Route::get('/student/form', [StudentController::class, 'form']);
Route::post('/student/form', [StudentController::class, 'create']);
// =>>> pembimbing Controller <==//

Route::get('/tutor', [TutorController::class, 'index']);
Route::get('/tutor/form', [TutorController::class, 'form']);
Route::post('/tutor/form', [TutorController::class, 'create']);
// =>>> Admin Controller <==//
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/form', [AdminController::class, 'form']);
Route::post('/admin/form', [AdminController::class, 'create']);
// =>>> Pengajuan Controller <==//
Route::get('/pengajuan', [PengajuanController::class, 'index'])->name('pengajuan');
Route::get('/pengajuan/form', [PengajuanController::class, 'create'])->name('pengajuan.create');
Route::post('/pengajuan/form', [PengajuanController::class, 'store'])->name('pengajuan.store');
Route::get('/pengajuan/edit', [PengajuanController::class, 'edit'])->name('pengajuan.edit');
Route::post('/pengajuan/edit', [PengajuanController::class, 'update'])->name('pengajuan.update');
Route::post('/pengajuan/delete', [PengajuanController::class, 'delete'])->name('pengajuan.delete');
// =>>>Judul Controller <==//
Route::get('/judul', [JudulController::class, 'index'])->name('judul');
Route::get('judul/form', [JudulController::class, 'create'])->name('judul.create');
Route::post('judul/form', [JudulController::class, 'store'])->name('judul.store');
Route::get('judul/edit', [JudulController::class, 'edit'])->name('judul.edit');
Route::post('judul/edit', [JudulController::class, 'update'])->name('judul.update');
Route::post('judul/delete', [JudulController::class, 'delete'])->name('judul.delete');


// Update
Route::get('/student/edit/{id}', [StudentController::class, 'form']); // take data from database
// Route::post('/students/{id}', 'StudentController@update');
Route::post('/student/edit/{id}', [StudentController::class, 'update']); // true
// Route::post('/student/ubah/{id}', [StudentController::class, 'update']); // true

// Delete
Route::get('/student/delete/{id}', [StudentController::class, 'delete']); // true



// Route::get('/student/create', [StudentController::class, 'create'])->name('student.create');



// Route::get('/student/create', [StudentController::class, 'create']);
// Route::post('/student', [StudentController::class, 'store']);
// Route::get('/student/{id}', [StudentController::class, 'show']);
// Route::get('/student/{id}/edit', [StudentController::class, 'edit']);
// Route::put('/student/{id}', [StudentController::class, 'update']);
// Route::delete('/student/{id}', [StudentController::class, 'destroy']);
// Route::get('/student/{id}/delete', [StudentController::class, 'delete']);
