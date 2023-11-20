<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LogsBeritaController;
use App\Http\Controllers\LogsWirausahaController;
use App\Http\Controllers\TakunController;
use App\Http\Controllers\TalumniController;
use App\Http\Controllers\TkuliahController;
use App\Http\Controllers\TkerjaController;
use App\Http\Controllers\LogsJenisBeritaController;
use App\Http\Controllers\TjenisBeritaController;
use App\Http\Controllers\TberitaController;
use App\Http\Controllers\TwirausahaController;
use App\Http\Controllers\TangkatanController;
use App\Http\Controllers\TjurusanController;
use App\Http\Controllers\TkelasController;
use App\Http\Controllers\AlumniController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

 Route::get('dashboard', [DashboardController::class, 'index']);

Route::get('alumni', [TalumniController::class, 'index']);
Route::get('data-alumni', [AlumniController::class, 'index']);
Route::get('alumni/export', [TalumniController::class, 'export']);
Route::get('alumni/cetak_pdf', [TalumniController::class, 'cetak_pdf']);
Route::get('alumni/tambah', [TalumniController::class, 'create']);
Route::post('alumni/simpan', [TalumniController::class, 'store']);
Route::get('alumni/edit/{id}', [TalumniController::class, 'edit']);
Route::post('alumni/update/{id}', [TalumniController::class, 'update']);
Route::post('alumni/hapus', [TalumniController::class, 'destroy']);
Route::get('alumni/detail/{id}', [TalumniController::class, 'show']);

Route::get('jenis_berita', [TjenisBeritaController::class, 'index']);
Route::get('jenis_berita/tambah', [TjenisBeritaController::class, 'create']);
Route::post('jenis_berita/simpan', [TjenisBeritaController::class, 'store']);
Route::get('jenis_berita/edit/{id}', [TjenisBeritaController::class, 'edit']);
Route::post('jenis_berita/edit/simpan', [TjenisBeritaController::class, 'update']);
Route::delete('jenis_berita/hapus/{id}', [TjenisBeritaController::class, 'destroy']);
Route::get('log_jenis_berita', [LogsJenisBeritaController::class, 'index']);
Route::get('log_berita', [LogsBeritaController::class, 'index']);



Route::get('berita', [TberitaController::class, 'index']);
Route::get('berita/tambah', [TberitaController::class, 'create']);
Route::post('berita/simpan', [TberitaController::class, 'store']);
Route::get('berita/edit/{id}', [TberitaController::class, 'edit']);
Route::post('berita/edit/simpan', [TberitaController::class, 'update']);
Route::delete('berita/hapus/{id}', [TberitaController::class, 'destroy']);

Route::get('kuliah', [TkuliahController::class, 'index']);
Route::get('kuliah/tambah', [TkuliahController::class, 'create']);
Route::post('kuliah/simpan', [TkuliahController::class, 'store']);
Route::get('kuliah/edit/{id}', [TkuliahController::class, 'edit']);
Route::post('kuliah/edit/simpan', [TkuliahController::class, 'update']);
Route::post('kuliah/hapus/{id}', [TkuliahController::class, 'destroy']);

Route::get('kerja', [TkerjaController::class, 'index']);
Route::get('kerja/tambah', [TkerjaController::class, 'create']);
Route::post('kerja/simpan', [TkerjaController::class, 'store']);
Route::get('kerja/edit/{id}', [TkerjaController::class, 'edit']);
Route::post('kerja/edit/simpan', [TkerjaController::class, 'update']);
Route::post('kerja/hapus/{id}', [TkerjaController::class, 'destroy']);


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
Route::post('wirausaha/edit/simpan', [TwirausahaController::class, 'update']);
Route::post('wirausaha/hapus/{id}', [TwirausahaController::class, 'destroy']);
Route::get('logs_wirausaha', [LogsWirausahaController::class, 'index']);

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
    Route::get('kelas/edit/{id}', [TkelasController::class, 'edit']);
    Route::post('kelas/update/{id}', [TkelasController::class, 'update']);

    Route::get('konfirm-berita', [konfirm_beritaController::class, 'index']);
});


// Route::prefix('dashboard')->middleware('OnlyAdmin')->group(function(){
    
// }