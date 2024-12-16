<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController; // Tambahkan jika ServiceController digunakan
use App\Http\Controllers\CourseController; // Tambahkan jika CourseController digunakan
use App\Http\Controllers\CourseMaterialController; // Tambahkan jika CourseController digunakan
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route untuk Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Middleware Auth untuk User Logged In
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/service', [ServiceController::class, 'index'])->name('service');
});

// Route untuk halaman kontak
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact.submit');


// Route tambahan untuk Course
Route::get('/courses', [CourseController::class, 'index'])->name('courses.index'); // Daftar kursus
Route::get('/courses/{id}', [CourseController::class, 'show'])->name('courses.show'); // Detail kursus
Route::get('/courses/{id}/materi', [CourseMaterialController::class, 'index'])->name('courses.materi');

require __DIR__.'/auth.php';
