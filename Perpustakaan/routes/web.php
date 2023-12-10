<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('authors');
});

Route::get('/authors', [AuthorController::class, 'index'])->name('authors');
Route::get('/books', [BookController::class, 'index'])->name('books');
Route::get('/categories', [CategoryController::class, 'index'])->name('categories');

Route::post('/authors', [AuthorController::class, 'store'])->name('authors.store');
Route::post('/books', [BookController::class, 'store'])->name('books.store');
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');

Route::delete('/authors/delete/{id}', AuthorController::class, 'destroy')->name('authors.delete');
Route::delete('/books/delete/{id}', BookController::class, 'destroy')->name('books.delete');
Route::delete('/categories/delete/{id}', CategoryController::class, 'destroy')->name('categories.delete');

Route::get('/authors/delete/{id}/edit', AuthorController::class, 'edit')->name('authors.edit');
Route::get('/books/delete/{id}/edit', BookController::class, 'edit')->name('books.edit');
Route::get('/categories/delete/{id}/edit', CategoryController::class, 'edit')->name('categories.edit');

Route::put('/authors/delete/{id}', AuthorController::class, 'update')->name('authors.update');
Route::put('/books/delete/{id}', BookController::class, 'update')->name('books.update');
Route::put('/categories/delete/{id}', CategoryController::class, 'update')->name('categories.update');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
