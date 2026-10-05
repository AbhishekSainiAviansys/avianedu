<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('/about-us', [PageController::class, 'about'])->name('about');
Route::get('/domains', [PageController::class, 'domains'])->name('domains');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/careers', [PageController::class, 'careers'])->name('careers');
Route::get('/creators', [PageController::class, 'creators'])->name('creators');

Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [PageController::class, 'sendContact'])->name('contact.send');

Route::get('/terms-and-conditions', [PageController::class, 'terms'])->name('terms');
Route::get('/privacy-policy', [PageController::class, 'privacy'])->name('privacy');
Route::get('/return-policy', [PageController::class, 'returns'])->name('returns');

Route::fallback(function () {
    return response()->view('errors.404', [], 404);
})->name('fallback');

