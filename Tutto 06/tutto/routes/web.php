<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;


Route::get('/contact', 'ContactController@create');
Route::post('/contact', 'ContactController@store');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/articles/{id}', [ArticleController::class, 'show'])->name('articles.show');




// Index
// Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');

// Create & Store
// Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');
// Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store');

// Show
// Route::get('/articles/{id}', [ArticleController::class, 'show'])->name('articles.show');

// Edit & Update
// Route::get('/articles/{id}/edit', [ArticleController::class, 'edit'])->name('articles.edit');
// Route::put('/articles/{id}', [ArticleController::class, 'update'])->name('articles.update');

// Delete
// Route::delete('/articles/{id}', [ArticleController::class, 'destroy'])->name('articles.destroy');



Route::resource('articles', ArticleController::class);

Route::get('/about', function () {
    return view('about');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
