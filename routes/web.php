<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResumeController;



// Routes for resumes
Route::get('/resumes', [ResumeController::class, 'index'])->name('resume.index');
Route::get('/resumes/create', [ResumeController::class, 'create'])->name('resume.create');
Route::post('/resumes', [ResumeController::class, 'store'])->name('resume.store');


