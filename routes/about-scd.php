<?php


use App\Http\Controllers\Pages\SCDController;
use Illuminate\Support\Facades\Route;


// About Us Routes
Route::prefix('about-scd')->name('about-scd.')->group(function () {
    Route::get('/what-is-scd', [SCDController::class, 'whatIsScd'])->name('what-is-scd');
    Route::get('/what-causes-scd-and-what-else-to-know', [SCDController::class, 'whatCauses'])->name('causes-scd');
    Route::get('/who-is-affected-by-scd', [SCDController::class, 'whoIsAffected'])->name('affected-scd');
    Route::get('/in-their-own-voices', [SCDController::class, 'inTheirVoices'])->name('voices');
    Route::get('/how-scd-can-be-treated-and-managed', [SCDController::class, 'treatedAndManage'])->name('treated-and-managed');
    Route::get('/how-scd-can-be-cured', [SCDController::class, 'canBeCured'])->name('cured');
    Route::get('/good-news', [SCDController::class, 'goodNews'])->name('good-news');
});

