<?php

use App\Http\Controllers\Pages\AboutController;
use App\Http\Controllers\Pages\GoalsController;
use App\Http\Controllers\Pages\GroundworkController;
use App\Http\Controllers\Pages\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/about/inspiration', [AboutController::class, 'inspiration'])->name('about.inspiration');


Route::get('/about/groundwork', [AboutController::class, 'groundwork'])->name('about.groundwork');
Route::get('/about/groundwork/one', [GroundworkController::class, 'one'])->name('groundwork.one');
Route::get('/about/groundwork/two', [GroundworkController::class, 'two'])->name('groundwork.two');
Route::get('/about/groundwork/three', [GroundworkController::class, 'three'])->name('groundwork.three');
Route::get('/about/groundwork/four', [GroundworkController::class, 'four'])->name('groundwork.four');
Route::get('/about/groundwork/five', [GroundworkController::class, 'five'])->name('groundwork.five');
Route::get('/about/groundwork/six', [GroundworkController::class, 'six'])->name('groundwork.six');
Route::get('/about/groundwork/seven', [GroundworkController::class, 'seven'])->name('groundwork.seven');
Route::get('/about/groundwork/eight', [GroundworkController::class, 'eight'])->name('groundwork.eight');


Route::get('/about/goals/new-born-screening', [GoalsController::class, 'one'])->name('goals.one');
Route::get('/about/goals/catch-up-screening', [GoalsController::class, 'two'])->name('goals.two');
Route::get('/about/goals/outreach-services', [GoalsController::class, 'three'])->name('goals.three');
Route::get('/about/goals/med-tech-innovations', [GoalsController::class, 'four'])->name('goals.four');
Route::get('/about/goals/well-trained-workforce', [GoalsController::class, 'five'])->name('goals.five');
Route::get('/about/goals/facilities-equipments', [GoalsController::class, 'six'])->name('goals.six');

Route::get('/about/mission', [AboutController::class, 'mission'])->name('about.mission');
Route::get('/about/goals', [AboutController::class, 'goals'])->name('about.goals');
Route::get('/about/staff', [AboutController::class, 'staff'])->name('about.staff');
Route::get('/about/board', [AboutController::class, 'board'])->name('about.board');
Route::get('/about/advisory', [AboutController::class, 'advisory'])->name('about.advisory');
Route::get('/about/memberships', [AboutController::class, 'memberships'])->name('about.memberships');
Route::get('/about/values', [AboutController::class, 'values'])->name('about.values');
