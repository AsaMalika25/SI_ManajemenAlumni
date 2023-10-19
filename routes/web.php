<?php

use App\Http\Controllers\TakunController;
use App\Http\Controllers\TalumniController;
<<<<<<< HEAD
use App\Http\Controllers\TsuperadminController;
=======
use App\Http\Controllers\TjenisBeritaController;
use App\Http\Controllers\TberitaController;
>>>>>>> 14ff5d6bf73186b30c0b29a9f5313a993e4a8afd
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
<<<<<<< HEAD
Route::get('akun', [TakunController::class, 'index']);
Route::get('akun/tambah', [TakunController::class, 'create']);
=======
>>>>>>> 14ff5d6bf73186b30c0b29a9f5313a993e4a8afd

});

<<<<<<< HEAD
// Route::get('berita', [TberitaController::class, 'index']);
// Route::get('berita/tambah', [TberitaController::class, 'create']);
=======
Route::get('jenis_berita', [TjenisBeritaController::class, 'index']);
Route::get('jenis_berita/tambah', [TjenisBeritaController::class, 'create']);
Route::post('jenis_berita/simpan', [TjenisBeritaController::class, 'store']);
Route::get('berita', [TberitaController::class, 'index']);
Route::get('berita/tambah', [TberitaController::class, 'create']);
>>>>>>> 14ff5d6bf73186b30c0b29a9f5313a993e4a8afd

// Route::prefix('dashboard')->middleware('OnlyAdmin')->group(function(){
    
// }