<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Models\Job;

Route::get('/', function () {
    return view('welcome', [
        'greeting' => 'hello'
    ]);
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

Route::get('/catpage', function () {
    return view('catpage');
})->name('catpage');

Route::get('/NoContactPage', function () {
    return view('NoContactPage');
})->name('NoContactPage');

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => Job::AllJobs()
    ]);
})->name('jobs');

Route::get('/jobs/{id}', function ($id) {
    $job = Job::JobSearch($id);

    return view('job', ['job' => $job]);
})->name('jobs');

require __DIR__.'/auth.php';
