<?php

use App\Http\Controllers\SchoolClassController;
use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;

Route::inertia('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'dashboard')->name('dashboard');
});

Route::get('classes',[SchoolClassController::class,'index'])->name('classes');
//Route::get('classes/{class}',[SchoolClassController::class,'index'])->name('classes');
//Route::get('classes/create',[SchoolClassController::class,'index'])->name('classes.create');
//Route::post('classes',[SchoolClassController::class,'index'])->name('classes.create');
//Route::get('classes/{class}/edit',[SchoolClassController::class,'index'])->name('classes.edit');
//Route::put('classes/{class}',[SchoolClassController::class,'index'])->name('classes.edit');
//Route::delete('classes/{class}',[SchoolClassController::class,'index'])->name('classes.delete');

Route::get('students',[StudentsController::class,'index'])->name('studnets');

require __DIR__.'/settings.php';
