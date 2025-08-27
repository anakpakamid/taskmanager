<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Page\TaskPage;
use App\Livewire\Page\TaskFormPage;
use App\Livewire\Page\CategoryPage;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/task', [App\Http\Controllers\TaskController::class, 'index'])->name('tasks.index');

Route::get('/task-page', TaskPage::class);
Route::get('/task-page/{id}', TaskFormPage::class);

Route::get('/category', CategoryPage::class);
// Route::get('/category/{id}', CategoryFormPage::class);
