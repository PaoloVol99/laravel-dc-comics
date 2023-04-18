<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\ComicController;
use App\Models\Comic;

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

})->name('home');

Route::get('/comics', [ComicController::class, 'index'])->name('comics.index');

Route::get('/comics/create', [ComicController::class, 'create'])->name('comics.create');

Route::get('/comics/{comic}', [ComicController::class, 'show'])->name('comics.show');

Route::post('/comics', [comicController::class, 'store'])->name('comics.store');

Route::get('/comics/{comic}/edit', [comicController::class, 'edit'])->name('comics.edit');

Route::put('/comics/{comic}', [comicController::class, 'update'])->name('comics.update');

Route::delete('/comics/{comic}', [comicController::class, 'destroy'])->name('comics.destroy');
