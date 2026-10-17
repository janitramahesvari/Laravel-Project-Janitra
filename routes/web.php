<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ClassroomController;

Route::get('/home', function () {
    return view('home');
});

Route::get('/admin/dashboard', [DashboardController::class, 'index'])
    ->name('admin.dashboard');

Route::get('/admin/about', [AboutController::class, 'index'])
    ->name('admin.about');

Route::get('/admin/student', [StudentController::class, 'index'])
    ->name('admin.student');

Route::get('/admin/classroom', [ClassroomController::class, 'index'])
    ->name('admin.classroom');

// require __DIR__.'/dashboardurl.php';
