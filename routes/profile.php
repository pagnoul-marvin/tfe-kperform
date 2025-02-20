<?php

use App\Livewire\ProfilePage\Profile;

Route::middleware('auth')->group(function () {
    Route::get('/profile', Profile::class)->name('profile');
});
