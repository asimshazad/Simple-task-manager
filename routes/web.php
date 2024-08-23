<?php

use App\Livewire\TaskForm;
use App\Livewire\TaskList;
use Illuminate\Support\Facades\Route;



Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::middleware(['auth'])->group(function () {
    Route::get('/tasks', TaskList::class)->name('tasks.index');
    Route::get('/tasks/create', TaskForm::class)->name('tasks.create');
});


require __DIR__.'/auth.php';
