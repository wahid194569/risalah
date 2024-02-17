<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TutorController;
use App\Http\Controllers\AdminController;
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

// Read, Create
Route::get('/student', [StudentController::class, 'index']);
Route::get('/student/form', [StudentController::class, 'form']);
Route::post('/student/form', [StudentController::class, 'create']);
// =================== Tutor
Route::get('/tutor', [TutorController::class, 'index']);
Route::get('/tutor/form', [TutorController::class, 'form']);
Route::post('/tutor/form', [TutorController::class, 'create']);
// =================== Admin
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/form', [AdminController::class, 'form']);
Route::post('/admin/form', [AdminController::class, 'create']);
// =================== Pengajuan
Route::get('/pengajuan', [PengajuanController::class, 'index']);
Route::get('/pengajuan/form', [PengajuanController::class, 'form']);
Route::post('/pengajuan/form', [PengajuanController::class, 'create']);
// Route::post('/pengajuan/update/{id}', [PengajuanController::class, 'update']);

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