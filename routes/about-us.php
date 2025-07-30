<?php

use App\Http\Controllers\Pages\AboutUsController;
use App\Http\Controllers\Pages\AboutUs\GoalsController;
use App\Http\Controllers\Pages\AboutUs\GroundworkController;
use Illuminate\Support\Facades\Route;


// About Us Routes
Route::prefix('about-us')->name('about-us.')->group(function () {
    Route::get('/inspiration', [AboutUsController::class, 'inspiration'])->name('inspiration');
    Route::get('/groundwork', [AboutUsController::class, 'groundwork'])->name('groundwork');
    Route::get('/mission', [AboutUsController::class, 'mission'])->name('mission');
    Route::get('/goals', [AboutUsController::class, 'goals'])->name('goals');
    Route::get('/staff', [AboutUsController::class, 'staff'])->name('staff');
    Route::get('/board', [AboutUsController::class, 'board'])->name('board');
    Route::get('/advisory', [AboutUsController::class, 'advisory'])->name('advisory');
    Route::get('/memberships', [AboutUsController::class, 'memberships'])->name('memberships');
    Route::get('/values', [AboutUsController::class, 'values'])->name('values');
});

// Groundwork Routes
Route::prefix('about-us/groundwork')->name('groundwork.')->group(function () {
    Route::get('/one', [GroundworkController::class, 'one'])->name('one');
    Route::get('/two', [GroundworkController::class, 'two'])->name('two');
    Route::get('/three', [GroundworkController::class, 'three'])->name('three');
    Route::get('/four', [GroundworkController::class, 'four'])->name('four');
    Route::get('/five', [GroundworkController::class, 'five'])->name('five');
    Route::get('/six', [GroundworkController::class, 'six'])->name('six');
    Route::get('/seven', [GroundworkController::class, 'seven'])->name('seven');
    Route::get('/eight', [GroundworkController::class, 'eight'])->name('eight');
});

// Goals Routes
Route::prefix('about-us/goals')->name('goals.')->group(function () {
    Route::get('/new-born-screening', [GoalsController::class, 'one'])->name('one');
    Route::get('/catch-up-screening', [GoalsController::class, 'two'])->name('two');
    Route::get('/outreach-services', [GoalsController::class, 'three'])->name('three');
    Route::get('/med-tech-innovations', [GoalsController::class, 'four'])->name('four');
    Route::get('/well-trained-workforce', [GoalsController::class, 'five'])->name('five');
    Route::get('/facilities-equipments', [GoalsController::class, 'six'])->name('six');
});
