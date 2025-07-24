<?php

use App\Http\Controllers\Pages\AboutController;
use App\Http\Controllers\Pages\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/about/inspiration', [AboutController::class, 'inspiration'])->name('about.inspiration');
Route::get('/about/groundwork', [AboutController::class, 'groundwork'])->name('about.groundwork');
Route::get('/about/mission', [AboutController::class, 'mission'])->name('about.mission');
Route::get('/about/goals', [AboutController::class, 'goals'])->name('about.goals');
Route::get('/about/staff', [AboutController::class, 'staff'])->name('about.staff');
Route::get('/about/board', [AboutController::class, 'board'])->name('about.board');
Route::get('/about/advisory', [AboutController::class, 'advisory'])->name('about.advisory');
Route::get('/about/memberships', [AboutController::class, 'memberships'])->name('about.memberships');
Route::get('/about/values', [AboutController::class, 'values'])->name('about.values');
