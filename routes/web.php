<?php

use App\Http\Controllers\WargaController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('/warga', [WargaController ::class, 'index'])->name('index');
Route::get('/warga/create', [WargaController ::class, 'create'])->name('create');
Route::post('/warga/store', [WargaController ::class, 'store'])->name('store');
Route::get('/warga/{id}/edit', [WargaController ::class, 'edit'])->name('edit');
Route::put('/warga/{id}', [WargaController ::class, 'update'])->name('update');
Route::delete('/warga/{id}', [WargaController::class, 'destroy'])->name('warga.destroy');