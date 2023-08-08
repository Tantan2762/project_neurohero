<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\OrtuController;
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

Route::get('/home',[MainController::class, 'index']);

// Data Tabel Ortu
// Tampil Data
Route::get('/ortu', [OrtuController::class, 'index']);
// Tambah Data
Route::get('ortu-create', [OrtuController::class, 'create']);
Route::post('/ortu-store', [OrtuController::class, 'store']);
// Edit Data
Route::get('/ortu-edit/{id}', [OrtuController::class, 'edit']);
Route::put('/ortu-update', [OrtuController::class, 'update']);
//Hapus Data
Route::get('/ortu-delete/{id}', [OrtuController::class, 'delete']);
//Detail Data
Route::get('/ortu-detail/{id}', [OrtuController::class, 'detail']);
//Tambah Data
Route::get('ortu-create-detail/{id}', [OrtuController::class, 'create_detail']);
Route::post('/ortu-store-detail/{id}', [OrtuController::class, 'store_detail']);
// Hapus Data
Route::get('/ortu-delete-detail/{id}', [OrtuController::class, 'delete_detail']);