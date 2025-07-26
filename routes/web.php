<?php

use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\BlogController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\CourseController;
use App\Http\Controllers\frontend\EventController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.home');
});

// frontend
Route::get('about', [AboutController::class, 'index'])->name('about.frontend');
Route::get('course', [CourseController::class, 'index'])->name('course.frontend');
Route::get('get-contact', [ContactController::class, 'index'])->name('contact.frontend');
Route::post('/kirim-pesan', [ContactController::class, 'kirim'])->name('kontak.kirim');
Route::get('/course1', function () {
    return view('frontend.pages.course.course1');
})->name('course1.frontend');
