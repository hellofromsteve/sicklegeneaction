<?php


use App\Http\Controllers\Pages\SCDController;
use Illuminate\Support\Facades\Route;


// About Us Routes
Route::prefix('about-scd')->name('about-scd.')->group(function () {
    Route::get('/what-is-scd', [SCDController::class, 'whatIsScd'])->name('what-is-scd');
    Route::get('/what-causes-scd-and-what-else-to-know', [SCDController::class, 'whatIsScd'])->name('causes-scd');
    Route::get('/who-is-affected-by-scd', [SCDController::class, 'whatIsScd'])->name('affected-scd');
    Route::get('/in-their-own-voices', [SCDController::class, 'whatIsScd'])->name('voices');
    Route::get('/how-scd-can-be-treated-and-managed', [SCDController::class, 'whatIsScd'])->name('treated-and-managed');
    Route::get('/how-scd-can-be-cured', [SCDController::class, 'whatIsScd'])->name('cured');
});

