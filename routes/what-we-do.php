<?php


use App\Http\Controllers\Pages\SCDController;
use App\Http\Controllers\Pages\WhatWeDoController;
use Illuminate\Support\Facades\Route;


// About Us Routes
Route::prefix('what-we-do')->name('what-we-do.')->group(function () {
    Route::get('/national-strategy', [WhatWeDoController::class, 'awns'])->name('awns');
    Route::get('/needs-and-advancement', [WhatWeDoController::class, 'ina'])->name('ina');
    Route::get('/raise-awareness', [WhatWeDoController::class, 'raiseAwareness'])->name('raise-awareness');
    Route::get('/amplify-warrior-voices', [WhatWeDoController::class, 'awsv'])->name('aswv');
    Route::get('/fill-screening-gaps', [WhatWeDoController::class, 'wfsg'])->name('wfsg');

});

