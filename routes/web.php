<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ArticleCategoryController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\QuoteRequestController;
use App\Http\Controllers\PublicArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MeetingRequestController;

Route::view('/', 'welcome')->name('home');
Route::view('/schoonmaakdiensten', 'pages.schoonmaakdiensten')->name('schoonmaakdiensten');
Route::view('/kantoorschoonmaak', 'pages.kantoorschoonmaak')->name('kantoorschoonmaak');
Route::view('/schoonmaak-scholen', 'pages.schoonmaak-scholen')->name('schoonmaak-scholen');
Route::view('/airbnb-schoonmaak', 'pages.airbnb-schoonmaak')->name('airbnb-schoonmaak');
Route::view('/schoonmaak-huurwoningen', 'pages.schoonmaak-huurwoningen')->name('schoonmaak-huurwoningen');
Route::view('/schoonmaak-vastgoed', 'pages.schoonmaak-vastgoed')->name('schoonmaak-vastgoed');
Route::view('/werkgebied', 'pages.werkgebied')->name('werkgebied');
Route::view('/over-superfresh', 'pages.over-superfresh')->name('over-superfresh');
Route::view('/veelgestelde-vragen', 'pages.veelgestelde-vragen')->name('veelgestelde-vragen');
Route::get('/offerte-aanvragen', [QuoteRequestController::class, 'create'])->name('offerte-aanvragen');
Route::post('/offerte-aanvragen', [QuoteRequestController::class, 'store'])->name('offerte-aanvragen.store')->middleware('throttle:5,1');
Route::get('/contact', [ContactController::class, 'create'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store')->middleware('throttle:5,1');
Route::get('/kennismaking-plannen', [MeetingRequestController::class, 'create'])->name('kennismaking-plannen');
Route::post('/kennismaking-plannen', [MeetingRequestController::class, 'store'])->name('kennismaking-plannen.store')->middleware('throttle:5,1');
Route::get('/tips-advies', [PublicArticleController::class, 'index'])->name('tips-advies');
Route::get('/tips-advies/{article:slug}', [PublicArticleController::class, 'show'])->name('tips-advies.show');

Route::get('/admin/login', [AuthController::class, 'create'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'store'])->name('admin.login.store');

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function (): void {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
    Route::view('/bookings', 'admin.bookings.index')->name('bookings.index');
    Route::view('/subscriptions', 'admin.subscriptions.index')->name('subscriptions.index');
    Route::resource('articles', ArticleController::class)->except('show');
    Route::resource('article-categories', ArticleCategoryController::class)->except('show');
    Route::post('/logout', [AuthController::class, 'destroy'])->name('logout');

    Route::middleware('admin')->resource('users', \App\Http\Controllers\Admin\UserController::class)->except('show');
});
