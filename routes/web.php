<?php

use App\Http\Controllers\TakunController;
use App\Http\Controllers\TalumniController;
use App\Http\Controllers\TsuperadminController;
use App\Http\Controllers\TjenisBeritaController;
use App\Http\Controllers\TberitaController;
use App\Http\Controllers\TwirausahaController;
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

// Route::group(['middleware' => ['AdminOnly']], function () {

Route::get('alumni', [TalumniController::class, 'index']);
Route::get('alumni/tambah', [TalumniController::class, 'create']);
Route::get('jenis_berita', [TjenisBeritaController::class, 'index']);
Route::get('jenis_berita/tambah', [TjenisBeritaController::class, 'create']);
Route::post('jenis_berita/simpan', [TjenisBeritaController::class, 'store']);
Route::get('jenis_berita/edit/{id}', [TjenisBeritaController::class, 'edit']);
Route::post('jenis_berita/edit/simpan', [TjenisBeritaController::class, 'update']);
Route::post('jenis_berita/hapus/{id}', [TjenisBeritaController::class, 'destroy']);

Route::get('berita', [TberitaController::class, 'index']);
Route::get('berita/tambah', [TberitaController::class, 'create']);
Route::post('berita/simpan', [TberitaController::class, 'store']);

Route::get('list_akun', [TakunController::class, 'list']);
Route::get('tambah_akun', [TakunController::class, 'create']);
Route::post('tambah_akun/tambah', [TakunController::class, 'store']);
Route::get('list_akun/edit/{id}', [TakunController::class, 'edit']);
Route::post('list_akun/edit/simpan', [TakunController::class, 'store']);
Route::post('list_akun/hapus/{id}', [TakunController::class, 'destroy']);

Route::get('wirausaha', [TwirausahaController::class, 'index']);
Route::get('tambah_wirausaha', [TwirausahaController::class, 'create']);
Route::post('tambah_wirausaha/simpan', [TwirausahaController::class, 'store']);
Route::get('wirausaha/edit/{id}', [TwirausahaController::class, 'edit']);
Route::post('wirausaha/edit/simpan', [TwirausahaController::class, 'store']);
Route::post('wirausaha/hapus/{id}', [TwirausahaController::class, 'destroy']);




// });


// Route::prefix('dashboard')->middleware('OnlyAdmin')->group(function(){
    
// }