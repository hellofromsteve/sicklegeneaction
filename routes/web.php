<?php

use App\Http\Controllers\Pages\AboutUsController;
use App\Http\Controllers\Pages\AboutUs\GoalsController;
use App\Http\Controllers\Pages\AboutUs\GroundworkController;
use App\Http\Controllers\Pages\GeneralController;
use Illuminate\Support\Facades\Route;

Route::get('/', [GeneralController::class, 'home'])->name('home');
Route::get('/about-us', [GeneralController::class, 'aboutUs'])->name('about-us');
Route::get('/about-scd', [GeneralController::class, 'aboutScd'])->name('about-scd');
Route::get('/contact-us', [GeneralController::class, 'contactUs'])->name('contact-us');
Route::post('/contact-us', [GeneralController::class, 'handleContact'])->name('handle-contact');
Route::get('/what-we-do', [GeneralController::class, 'whatWeDo'])->name('what-we-do');





// About Routes
require base_path('routes/about-us.php');
require base_path('routes/about-scd.php');

