<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AutoController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


// admin

Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function() {
    Route::get('/auto', [AdminController::class, 'adminGetAllAuto'])->name('admin.auto');
    Route::get('/auto/comments', [AdminController::class, 'adminGetAllComments'])->name('admin.auto.comments');
    Route::delete('/auto/{id}', [AdminController::class, 'adminDeleteAuto'])->name('admin.auto.delete');
    Route::delete('/auto/comments/{id}', [AdminController::class, 'adminDeleteComments'])->name('admin.auto.comments.delete');
});




Route::get('/auto', [AutoController::class, 'index'])->name('auto.index');
Route::get('/auto/create', [AutoController::class, 'create'])->name('auto.create');
Route::post('/auto/store', [AutoController::class, 'store'])->name('auto.store');
Route::get('/auto/{id}', [AutoController::class, 'show'])->name('auto.show');
Route::get('/auto/edit/{id}', [AutoController::class, 'edit'])->name('auto.edit');
Route::post('/auto/update/{id}', [AutoController::class, 'update'])->name('auto.update');


// comment module
Route::post('/auto/{id}', [CommentController::class, 'addComment'])->name('auto.comment.add');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
