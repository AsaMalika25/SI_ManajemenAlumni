<?php

use App\Http\Controllers\TakunController;
use App\Http\Controllers\TalumniController;
use App\Http\Controllers\TjenisBeritaController;
use App\Http\Controllers\TberitaController;
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
Route::get('/', [TakunController::class,'index']);
Route::post('login', [TakunController::class,'login']);
Route::get('logout', [TakunController::class,'logout']);

Route::group(['middleware' => ['AdminOnly']], function () {

Route::get('alumni', [TalumniController::class, 'index']);
Route::get('alumni/tambah', [TalumniController::class, 'create']);
Route::get('jenis_berita', [TjenisBeritaController::class, 'index']);
Route::get('jenis_berita/tambah', [TjenisBeritaController::class, 'create']);
Route::post('jenis_berita/simpan', [TjenisBeritaController::class, 'store']);
Route::get('jenis_berita/edit/{id}', [TjenisBeritaController::class, 'update']);
Route::delete('jenis_berita/hapus/{id}', [TjenisBeritaController::class, 'destroy']);

Route::get('berita', [TberitaController::class, 'index']);
Route::get('berita/tambah', [TberitaController::class, 'create']);



});


// Route::prefix('dashboard')->middleware('OnlyAdmin')->group(function(){
    
// }