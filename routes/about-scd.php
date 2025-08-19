<?php


use App\Http\Controllers\Pages\SCDController;
use Illuminate\Support\Facades\Route;


// About Us Routes
Route::prefix('about-scd')->name('about-scd.')->group(function () {
    Route::get('/what-is-scd', [SCDController::class, 'whatIsScd'])->name('what-is-scd');
    Route::get('/what-causes-scd', [SCDController::class, 'whatCauses'])->name('causes-scd');
    Route::get('/challenges-of-scd', [SCDController::class, 'scdChallenges'])->name('challenges-scd');
    Route::get('/challenges/battle-one', [SCDController::class, 'battleOne'])->name('battle-one');
    Route::get('/challenges/battle-two', [SCDController::class, 'battleTwo'])->name('battle-two');
    Route::get('/challenges/battle-three', [SCDController::class, 'battleThree'])->name('battle-three');
    Route::get('/who-is-affected-by-scd', [SCDController::class, 'whoIsAffected'])->name('affected-scd');
    Route::get('/in-their-own-voices', [SCDController::class, 'inTheirVoices'])->name('voices');
    Route::get('/how-scd-can-be-treated-and-managed', [SCDController::class, 'treatedAndManage'])->name('treated-and-managed');
    Route::get('/how-scd-can-be-cured', [SCDController::class, 'canBeCured'])->name('cured');
    Route::get('/good-news', [SCDController::class, 'goodNews'])->name('good-news');
});

