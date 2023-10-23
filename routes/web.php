<?php

use App\Http\Controllers\TakunController;
use App\Http\Controllers\TalumniController;
use App\Http\Controllers\TsuperadminController;
use App\Http\Controllers\TjenisBeritaController;
use App\Http\Controllers\TberitaController;
use App\Http\Controllers\TwirausahaController;
use App\Http\Controllers\TangkatanController;
use App\Http\Controllers\TjurusanController;
use App\Http\Controllers\TkelasController;
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
Route::get('register', [TakunController::class,'register']);
Route::get('register', [TakunController::class,'register']);
Route::post('proses-register', [TakunController::class,'prosesregister']);

Route::group(['middleware' => ['AdminOnly']], function () {

Route::get('alumni', [TalumniController::class, 'index']);
Route::get('alumni/tambah', [TalumniController::class, 'create']);
Route::post('alumni/simpan', [TalumniController::class, 'store']);
Route::get('alumni/edit/{id}', [TalumniController::class, 'edit']);
Route::post('alumni/update/{id}', [TalumniController::class, 'update']);
Route::post('alumni/hapus', [TalumniController::class, 'destroy']);
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

    Route::get('angkatan', [TangkatanController::class, 'index']);
    Route::get('angkatan/tambah', [TangkatanController::class, 'create']);
    Route::post('angkatan/simpan', [TangkatanController::class, 'store']);
    Route::post('angkatan/hapus', [TangkatanController::class, 'destroy']);
    Route::get('angkatan/edit/{id}', [TangkatanController::class, 'edit']);
    Route::post('angkatan/update/{id}', [TangkatanController::class, 'update']);

    Route::get('jurusan', [TjurusanController::class, 'index']);
    Route::get('jurusan/tambah', [TjurusanController::class, 'create']);
    Route::post('jurusan/simpan', [TjurusanController::class, 'store']);
    Route::post('jurusan/hapus', [TjurusanController::class, 'destroy']);
    Route::get('jurusan/edit/{id}', [TjurusanController::class, 'edit']);
    Route::post('jurusan/update/{id}', [TjurusanController::class, 'update']);

    Route::get('kelas', [TkelasController::class, 'index']);
    Route::get('kelas/tambah', [TkelasController::class, 'create']);
    Route::post('kelas/simpan', [TkelasController::class, 'store']);
    Route::post('kelas/hapus', [TkelasController::class, 'destroy']);
    Route::get('kelas/edit/{id}', [TjurusanController::class, 'edit']);
    Route::post('kelas/update/{id}', [TjurusanController::class, 'update']);
});


// Route::prefix('dashboard')->middleware('OnlyAdmin')->group(function(){
    
// }