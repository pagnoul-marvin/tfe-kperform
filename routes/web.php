<?php

use App\Livewire\AboutPage\About;
use App\Livewire\ContactPage\Contact;
use App\Livewire\HomePage\Home;
use App\Livewire\LegalMentions;
use App\Livewire\ServicesPage\Services;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');
Route::get('/about', About::class)->name('about');
Route::get('/services', Services::class)->name('services');
Route::get('/contact', Contact::class)->name('contact');
Route::get('/legal-mentions', LegalMentions::class)->name('legal-mentions');

require __DIR__.'/auth.php';
require __DIR__.'/profile.php';
require __DIR__.'/appointment.php';
