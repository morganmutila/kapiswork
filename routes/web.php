<?php

use Illuminate\Support\Facades\Route;
use App\Models\Listing;
use App\Models\Tag;
use App\Http\Controllers;

Route::get('/', function (){
        $jobs = Listing::count();
        $listings = Listing::query()
                        ->where('is_active', true)
                        ->with(['tags', 'user'])
                        ->latest()
                        ->Paginate(8);
        $tags = Tag::orderby('name')->get();
        return view('home', compact('listings', 'tags', 'jobs'));
})->name('home');

Route::get('/browse', [Controllers\ListingController::class, 'index'])->name('listings.index');

require __DIR__.'/auth.php';

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
