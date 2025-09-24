<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use \Illuminate\Support\Arr;

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
        'jobs' => [
            [
                'id' => 1,
                'title' => 'colonel cat',
                'salary' => '60 cans of cat food'
            ],
            [
                'id' => 2,
                'title' => 'mayor cat',
                'salary' => '80 cans of cat food'
            ],
            [
                'id' => 3,
                'title' => 'factory worker cat',
                'salary' => '45 cans of cat food'
            ]
        ]
    ]);
})->name('jobs');

Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        [
            'id' => 1,
            'title' => 'colonel cat',
            'salary' => '60 cans of cat food'
        ],
        [
            'id' => 2,
            'title' => 'mayor cat',
            'salary' => '80 cans of cat food'
        ],
        [
            'id' => 3,
            'title' => 'factory worker cat',
            'salary' => '45 cans of cat food'
        ]
    ];
    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);
    return view('jobs');
})->name('jobs');

require __DIR__.'/auth.php';
