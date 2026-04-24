<?php

use App\Livewire\Landing\Index;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

Route::get('/', Index::class)->name('home');

require __DIR__.'/settings.php';
