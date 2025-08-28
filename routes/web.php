<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Page\TaskPage;
use App\Livewire\Page\TaskFormPage;
use App\Livewire\Page\CategoryPage;
use App\Livewire\Page\CategoryFormPage;
use App\Livewire\AlpineConcept;
use App\Livewire\Page\SigninPage;
use App\Livewire\Page\SignupPage;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/task', [App\Http\Controllers\TaskController::class, 'index'])->name('tasks.index');

Route::get('/task-page', TaskPage::class)->name('task-page');
Route::get('/task-page/{id}', TaskFormPage::class)->name('task.form');

Route::get('/category', CategoryPage::class)->name('category');
Route::get('/category/{id}', CategoryFormPage::class)->name('category.form');

Route::get('/alpine', AlpineConcept::class)->name('alpine');

Route::group(['prefix' => 'auth'], function () {
    Route::get('/sign-in', SigninPage::class)->name('auth.sign-in');
    Route::get('/sign-up', SignupPage::class)->name('auth.sign-up');
});
