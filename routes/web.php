<?php

use App\Livewire\Landing\About\CoperateResponsibility;
use App\Livewire\Landing\About\DiversityInclusion;
use App\Livewire\Landing\About\InvestmentCapabilities;
use App\Livewire\Landing\About\OurCommitment;
use App\Livewire\Landing\About\OurCompany;
use App\Livewire\Landing\About\OurLeadership;
use App\Livewire\Landing\Blog\Article;
use App\Livewire\Landing\Index;
use App\Livewire\Landing\Plans\Calculator;
use App\Livewire\Landing\Plans\InvestmentPlans;
use App\Livewire\Landing\Legal\PaymentPolicy;
use App\Livewire\Landing\Plans\Suggestion;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

// comment 1

Route::get('/', Index::class)->name('home');

Route::prefix('about')->group(function () {
    Route::get('/our-company', OurCompany::class)->name('about.our-company');
    Route::get('/our-leadership', OurLeadership::class)->name('about.our-leadership');
    Route::get('/coperate-responsibility', CoperateResponsibility::class)->name('about.responsibility');
    Route::get('/diversity-inclusion', DiversityInclusion::class)->name('about.diversity-inclusion');
    Route::get('/investment-capabilities', InvestmentCapabilities::class)->name('about.investment-capabilities');
    Route::get('/our-commitment', OurCommitment::class)->name('about.our-commitment');
});

Route::prefix('plans')->group(function () {
    Route::get('/investment-plans', InvestmentPlans::class)->name('plans.list');
    Route::get('/plan-suggestion', Suggestion::class)->name('plans.suggestion');
    Route::get('/plan-calculator', Calculator::class)->name('plans.calculator');
});

Route::prefix('blog')->group(function () {
    Route::get('/investment-article', Article::class)->name('blog.investment-article');
});

Route::prefix('legal')->group(function () {
    Route::get('/payment-policy', PaymentPolicy::class)->name('legal.payment-policy');
});
require __DIR__.'/settings.php';
