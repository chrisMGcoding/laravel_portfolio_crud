<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CompetenceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ResumeController;
use Illuminate\Support\Facades\Route;

// ================ Accès ================

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::get('/resume', [ResumeController::class, 'index'])->name('resume');

Route::get('/facts', [FactController::class, 'index'])->name('facts');

Route::get('/competence', [CompetenceController::class, 'index'])->name('competence');

Route::get('/photo', [PhotoController::class, 'index'])->name('photo');

// ================ CRUD ================

// --------- About ---------

Route::post('/about/store', [AboutController::class, 'store']);

Route::post('/about/{id}', [AboutController::class, 'destroy']);

Route::get('/crud/aboutshow/{id}', [AboutController::class, 'show']);

Route::get('/crud/aboutedit/{id}', [AboutController::class, 'edit']);
Route::put('/crud/aboutupdate/{id}', [AboutController::class, 'update']);

// --------- Contact ---------

Route::post('/contact/store', [ContactController::class, 'store']);

Route::post('/contact/{id}', [ContactController::class, 'destroy']);

Route::get('/crud/contactshow/{id}', [ContactController::class, 'show']);

Route::get('/crud/contactedit/{id}', [ContactController::class, 'edit']);
Route::put('/crud/contactupdate/{id}', [ContactController::class, 'update']);

// --------- Facts ---------

Route::post('/facts/store', [FactController::class, 'store']);

Route::post('/facts/{id}', [FactController::class, 'destroy']);

Route::get('/crud/factsshow/{id}', [FactController::class, 'show']);

Route::get('/crud/factsedit/{id}', [FactController::class, 'edit']);
Route::put('/crud/factsupdate/{id}', [FactController::class, 'update']);

// --------- Resume ---------

Route::post('/resume/store', [ResumeController::class, 'store']);

Route::post('/resume/{id}', [ResumeController::class, 'destroy']);

Route::get('/crud/resumeshow/{id}', [ResumeController::class, 'show']);

Route::get('/crud/resumeedit/{id}', [ResumeController::class, 'edit']);
Route::put('/crud/resumeupdate/{id}', [ResumeController::class, 'update']);

// --------- Competence ---------

Route::post('/competence/store', [CompetenceController::class, 'store']);

Route::post('/competence/{id}', [CompetenceController::class, 'destroy']);

Route::get('/crud/competenceshow/{id}', [CompetenceController::class, 'show']);

Route::get('/crud/competenceedit/{id}', [CompetenceController::class, 'edit']);
Route::put('/crud/competenceupdate/{id}', [CompetenceController::class, 'update']);

// --------- Photo ---------

Route::post('/photo/store', [PhotoController::class, 'store']);

Route::post('/photo/{id}', [PhotoController::class, 'destroy']);

Route::get('/crud/photoshow/{id}', [PhotoController::class, 'show']);

Route::get('/crud/photoedit/{id}', [PhotoController::class, 'edit']);
Route::put('/crud/photoupdate/{id}', [PhotoController::class, 'update']);
