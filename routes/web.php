<?php

use App\Http\Controllers\AutoController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/auto', [AutoController::class, 'index'])->name('auto.index');
Route::get('/auto/create', [AutoController::class, 'create'])->name('auto.create');
Route::post('/auto/store', [AutoController::class, 'store'])->name('auto.store');
Route::get('/auto/{id}', [AutoController::class, 'show'])->name('auto.show');
Route::get('/auto/edit/{id}', [AutoController::class, 'edit'])->name('auto.edit');
Route::post('/auto/update/{id}', [AutoController::class, 'update'])->name('auto.update');