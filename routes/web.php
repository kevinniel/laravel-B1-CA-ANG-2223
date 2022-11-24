<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BookController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/books', [BookController::class, 'index'])->name("book.index");
Route::get('/create-book', [BookController::class, 'create'])->name("book.create");
Route::post('/create-book', [BookController::class, 'store'])->name("book.store");
Route::get('/book/{id}', [BookController::class, 'show'])->name("book.show");
Route::get('/book/{id}/edit', [BookController::class, 'edit'])->name("book.edit");
Route::put('/book/{id}', [BookController::class, 'update'])->name("book.update");
Route::delete('/book', [BookController::class, 'destroy'])->name("book.destroy");