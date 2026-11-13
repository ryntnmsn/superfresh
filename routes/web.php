<?php

use App\Models\Article;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ContactMessageController as AdminContactMessageController;
use App\Http\Controllers\Admin\ArticleCategoryController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\QuoteRequestController as AdminQuoteRequestController;
use App\Http\Controllers\QuoteRequestController;
use App\Http\Controllers\PublicArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MeetingRequestController;
use App\Http\Middleware\VerifyRecaptcha;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');
Route::get('/sitemap.xml', function (): Response {
    $urls = [
        route('home'),
        route('kantoorschoonmaak'),
        route('schoonmaak-scholen'),
        route('airbnb-schoonmaak'),
        route('schoonmaak-huurwoningen'),
        route('schoonmaak-vastgoed'),
        route('werkgebied'),
        route('veelgestelde-vragen'),
        route('privacyverklaring'),
        route('contact'),
        route('offerte-aanvragen'),
        route('tips-advies'),
    ];
    $articleUrls = Article::query()
        ->where('status', 'published')
        ->pluck('slug')
        ->map(fn (string $slug): string => route('tips-advies.show', ['article' => $slug]))
        ->all();

    return response()->view('sitemap', ['urls' => [...$urls, ...$articleUrls]], 200, ['Content-Type' => 'application/xml']);
})->name('sitemap');
Route::get('/robots.txt', function (): Response {
    return response("User-agent: *\nAllow: /\nSitemap: ".route('sitemap')."\n", 200, ['Content-Type' => 'text/plain']);
})->name('robots');
Route::post('/language', function (Request $request): RedirectResponse {
    $validated = $request->validate(['locale' => ['required', 'in:nl,en']]);
    $request->session()->put('locale', $validated['locale']);

    return redirect()->back();
})->name('language.switch');
Route::view('/kantoorschoonmaak', 'pages.kantoorschoonmaak')->name('kantoorschoonmaak');
Route::view('/schoonmaak-scholen', 'pages.schoonmaak-scholen')->name('schoonmaak-scholen');
Route::view('/airbnb-schoonmaak', 'pages.airbnb-schoonmaak')->name('airbnb-schoonmaak');
Route::view('/schoonmaak-huurwoningen', 'pages.schoonmaak-huurwoningen')->name('schoonmaak-huurwoningen');
Route::view('/schoonmaak-vastgoed', 'pages.schoonmaak-vastgoed')->name('schoonmaak-vastgoed');
Route::permanentRedirect('/schoonmaakdiensten', '/#diensten')->name('schoonmaakdiensten.redirect');
Route::view('/werkgebied', 'pages.werkgebied')->name('werkgebied');
Route::view('/veelgestelde-vragen', 'pages.veelgestelde-vragen')->name('veelgestelde-vragen');
Route::view('/privacyverklaring', 'pages.privacyverklaring')->name('privacyverklaring');
Route::get('/offerte-aanvragen', [QuoteRequestController::class, 'create'])->name('offerte-aanvragen');
Route::post('/offerte-aanvragen', [QuoteRequestController::class, 'store'])->name('offerte-aanvragen.store')->middleware(['throttle:5,1', VerifyRecaptcha::class]);
Route::get('/contact', [ContactController::class, 'create'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store')->middleware(['throttle:5,1', VerifyRecaptcha::class]);
Route::get('/kennismaking-plannen', [MeetingRequestController::class, 'create'])->name('kennismaking-plannen');
Route::post('/kennismaking-plannen', [MeetingRequestController::class, 'store'])->name('kennismaking-plannen.store')->middleware(['throttle:5,1', VerifyRecaptcha::class]);
Route::get('/tips-advies', [PublicArticleController::class, 'index'])->name('tips-advies');
Route::get('/tips-advies/{article:slug}', [PublicArticleController::class, 'show'])->name('tips-advies.show');

Route::get('/admin/login', [AuthController::class, 'create'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'store'])->name('admin.login.store');

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function (): void {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
    Route::view('/subscriptions', 'admin.subscriptions.index')->name('subscriptions.index');
    Route::middleware('admin')->get('/contact-messages', [AdminContactMessageController::class, 'index'])->name('contact-messages.index');
    Route::middleware('admin')->get('/quote-requests', [AdminQuoteRequestController::class, 'index'])->name('quote-requests.index');
    Route::middleware('admin')->get('/quote-requests/{quoteRequest}/photos/{photoIndex}', [AdminQuoteRequestController::class, 'photo'])
        ->whereNumber('photoIndex')
        ->name('quote-requests.photos.show');
    Route::post('/articles/{article}/duplicate', [ArticleController::class, 'duplicate'])->name('articles.duplicate');
    Route::resource('articles', ArticleController::class)->except('show');
    Route::resource('article-categories', ArticleCategoryController::class)->except('show');
    Route::post('/logout', [AuthController::class, 'destroy'])->name('logout');

    Route::middleware('admin')->resource('users', \App\Http\Controllers\Admin\UserController::class)->except('show');
});
