<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataProdusensController;

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
//     return view('home');
// });

Route::get('/contents', [DataProdusensController::class, 'index'])->name('contents');
Route::get('/', [DataProdusensController::class, 'show']); 

// Route untuk menampilkan form edit
Route::get('/contents/{id}/edit', [DataProdusensController::class, 'edit'])->name('content.edit');

// Route untuk memperbarui konten
Route::put('/contents/{id}', [DataProdusensController::class, 'update']);
