<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';

// ---------------------------------------------------------------------------------------------------------

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// // get barang list
Route::get('/dashboard', [
    BarangController::class, 'index'
])->middleware(['auth', 'verified'])->name('barang.dashboard');

// create barang
Route::get('/barang/add', function () {
    return view('barang.add');
})->middleware(['auth', 'verified'])->name('barang.add');
Route::post('/barang/add', [BarangController::class, 'store'])->name('barang.store');

// get details barang
Route::get('/barang/{id}', [BarangController::class, 'detail'])->middleware(['auth', 'verified'])->name('barang.details');

// show
Route::get('/barang', [BarangController::class, 'show'])->middleware(['auth', 'verified'])->name('barang.show');

// delete barang
Route::delete('/barang/{id}', [BarangController::class, 'destroy'])->middleware(['auth', 'verified'])->name('barang.destroy');

//update barang
Route::put('/barang/{id}', [BarangController::class, 'update'])->name('barang.update');
Route::get('/barang/{id}/edit', [BarangController::class, 'edit'])->middleware(['auth', 'verified'])->name('barang.edit');

// ----------------------------------------------------------------------------------------------------

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
