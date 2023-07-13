<?php

use Illuminate\Support\Facades\Route;
use App\Models\Berita;
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
    $berita = Berita::all();
    return view('welcome')->with('berita',$berita);
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/berita', [App\Http\Controllers\beritaController::class, 'index'])->name('berita');
Route::post('/berita/tambah', [App\Http\Controllers\beritaController::class, 'store'])->name('berita.tambah');
Route::get('/berita/{berita}/edit', [App\Http\Controllers\beritaController::class, 'edit'])->name('berita.edit');
Route::patch('/berita/{berita}', [App\Http\Controllers\beritaController::class, 'update'])->name('berita.update');
Route::delete('/beritas/{berita}', [App\Http\Controllers\beritaController::class, 'delete'])->name('berita.hapus');
