<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BukuController;
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

Route::controller(AuthController::class)->group(function(){
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSimpan')->name('register.simpan');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAksi')->name('login.aksi');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::get('/', function () {
    return view('welcome');
});



Route::middleware('auth')->group(function(){
Route::get('dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::controller(BukuController::class)->prefix('buku')->group(function (){
    Route::get('', 'index')->name('buku');
    Route::get('tambah', 'tambah')->name('buku.tambah');
    Route::get('edit/{id}', 'edit')->name('buku.edit');
    Route::get('delete/{id}', 'delete')->name('buku.delete');

    Route::post('tambah', 'submit')->name('buku.tambah.submit');
    Route::post('edit/{id}', 'update')->name('buku.tambah.update');
});
});