<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\Supplier;
use App\Http\Controllers\Barang;
use App\Http\Controllers\login;
use App\Http\Controllers\Yayasan;
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

Route::get('/', [Supplier::class, 'index']);

Route::get('/tambahSupplier', [Supplier::class, 'tambahSupplier']);
Route::post('/save', [Supplier::class, 'save']);
Route::delete('/hapus/{id}', [Supplier::class, 'destroy']);

Route::put('/edit/{id}', [Supplier::class, 'edit']);
Route::get('/update/{id}', [Supplier::class, 'update']);

Route::get('/barang', [Barang::class,'index']);
Route::post('/barang/save', [Barang::class,'save']);

Route::get('/login', [login::class,'index'])->name('login');
Route::post('/login/proses', [login::class,'proses']);

Route::get('/logout', [login::class,'logout'])->name('logout');

Route::group(['middleware' => ['auth']],function (){
    Route::group(['middleware' => ['cekUserLogin:1']], function () {
        Route::resource('admin', Admin::class);
    });
    Route::group(['middleware' => ['cekUserLogin:2']], function () {
        Route::resource('yayasan', Yayasan::class );
    });
});

// Route::get('/', function () {
//     return view('welcome');
// });
