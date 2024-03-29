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
use App\Http\Controllers\TkaprogController;
use App\Http\Controllers\TkelasController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\logController;
use App\Http\Controllers\ProfilController;
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

Route::get('/', [TakunController::class,'index'])->name('login');
Route::post('login', [TakunController::class,'login']);
Route::get('logout', [TakunController::class,'logout']);
Route::get('register', [TakunController::class,'register']);
Route::get('register', [TakunController::class,'register']);
Route::post('proses-register', [TakunController::class,'prosesregister']);




Route::get('log', [logController::class, 'index']);
Route::post('log/hapus', [logController::class, 'destroy']);


Route::middleware(['auth'])->group(function () {

    Route::get('dashboard', [DashboardController::class, 'index']);

    Route::get('/profile', [ProfilController::class, 'index'])->name('alumni.profile');
    
    Route::middleware(['AdminOnly:superadmin,kaprog'])->group(function () {

        Route::get('berita', [TberitaController::class, 'index']);
        Route::get('berita/tambah', [TberitaController::class, 'create']);
        Route::post('berita/simpan', [TberitaController::class, 'store']);
        Route::get('berita/edit/{id}', [TberitaController::class, 'edit']);
        Route::post('berita/edit/simpan', [TberitaController::class, 'update']);
        Route::delete('berita/hapus/{id}', [TberitaController::class, 'destroy']);
        Route::get('berita/detail/{id}', [TberitaController::class, 'show']);
    });

        Route::middleware(['AdminOnly:alumni'])->group(function () {

            Route::get('data-alumni', [AlumniController::class, 'index']);
            Route::get('berita-alumni', [TberitaController::class, 'Berita']);
            Route::get('berita-alumni/tambah', [TberitaController::class, 'create_berita']);
            Route::post('berita-alumni/simpan', [TberitaController::class, 'store_berita']);
            Route::get('berita-alumni/cetak_pdf', [TberitaController::class, 'cetak_Berita']);

            Route::get('profile-alumni', [ProfilController::class, 'profile']);
            Route::post('profile-alumni/simpan', [ProfilController::class, 'create_profile']);

           
        });

        Route::middleware(['AdminOnly:superadmin'])->group(function () {

            Route::get('alumni', [TalumniController::class, 'index']);
            Route::get('alumni/export', [TalumniController::class, 'export']);
            Route::get('alumni/cetak_pdf', [TalumniController::class, 'cetak_pdf']);
            Route::get('alumni/tambah', [TalumniController::class, 'create']);
            Route::post('alumni/simpan', [TalumniController::class, 'store']);
            Route::get('alumni/edit/{id}', [TalumniController::class, 'edit']);
            Route::post('alumni/update/{id}', [TalumniController::class, 'update']);
            Route::post('alumni/hapus', [TalumniController::class, 'destroy']);
            Route::get('alumni/detail/{id}', [TalumniController::class, 'show']);

            Route::get('list_akun', [TakunController::class, 'list']);
            Route::get('tambah_akun', [TakunController::class, 'create']);
            Route::post('tambah_akun/tambah', [TakunController::class, 'store']);
            Route::get('list_akun/edit/{id}', [TakunController::class, 'edit']);
            Route::post('list_akun/edit/simpan/', [TakunController::class, 'store']);
            Route::delete('list_akun/hapus/{id}', [TakunController::class, 'destroy']);
            Route::get('list_akun/cetak_pdf', [TakunController::class, 'cetak_pdf']);

            Route::get('jenis_berita', [TjenisBeritaController::class, 'index']);
            Route::get('jenis_berita/tambah', [TjenisBeritaController::class, 'create']);
            Route::post('jenis_berita/simpan', [TjenisBeritaController::class, 'store']);
            Route::get('jenis_berita/edit/{id}', [TjenisBeritaController::class, 'edit']);
            Route::post('jenis_berita/edit/simpan', [TjenisBeritaController::class, 'update']);
            Route::delete('jenis_berita/hapus/{id}', [TjenisBeritaController::class, 'destroy']);
            Route::get('log_jenis_berita', [LogsJenisBeritaController::class, 'index']);
            Route::get('log_berita', [LogsBeritaController::class, 'index']);

            Route::get('kerja', [TkerjaController::class, 'index']);
            Route::get('kerja/tambah', [TkerjaController::class, 'create']);
            Route::post('kerja/simpan', [TkerjaController::class, 'store']);
            Route::get('kerja/edit/{id}', [TkerjaController::class, 'edit']);
            Route::post('kerja/edit/simpan', [TkerjaController::class, 'update']);
            Route::delete('kerja/hapus/{id}', [TkerjaController::class, 'destroy']);


            Route::get('angkatan', [TangkatanController::class, 'index']);
            Route::get('angkatan/tambah', [TangkatanController::class, 'create']);
            Route::post('angkatan/simpan', [TangkatanController::class, 'store']);
            Route::delete('angkatan/hapus/{id}', [TangkatanController::class, 'destroy']);
            Route::get('angkatan/edit/{id}', [TangkatanController::class, 'edit']);
            Route::post('angkatan/edit/simpan', [TangkatanController::class, 'update']);

            Route::get('jurusan', [TjurusanController::class, 'index']);
            Route::get('jurusan/tambah', [TjurusanController::class, 'create']);
            Route::post('jurusan/simpan', [TjurusanController::class, 'store']);
            Route::delete('jurusan/hapus/{id}', [TjurusanController::class, 'destroy']);
            Route::get('jurusan/edit/{id}', [TjurusanController::class, 'edit']);
            Route::post('jurusan/edit/simpan', [TjurusanController::class, 'update']);

            Route::get('kelas', [TkelasController::class, 'index']);
            Route::get('kelas/tambah', [TkelasController::class, 'create']);
            Route::post('kelas/simpan', [TkelasController::class, 'store']);
            Route::delete('kelas/hapus/{id}', [TkelasController::class, 'destroy']);
            Route::get('kelas/edit/{id}', [TkelasController::class, 'edit']);
            Route::post('kelas/edit/simpan', [TkelasController::class, 'update']);

            Route::get('kuliah', [TkuliahController::class, 'index']);
            Route::get('kuliah/tambah', [TkuliahController::class, 'create']);
            Route::post('kuliah/simpan', [TkuliahController::class, 'store']);
            Route::get('kuliah/edit/{id}', [TkuliahController::class, 'edit']);
            Route::post('kuliah/edit/simpan', [TkuliahController::class, 'update']);
            Route::delete('kuliah/hapus/{id}', [TkuliahController::class, 'destroy']);

            Route::get('kerja', [TkerjaController::class, 'index']);
            Route::get('kerja/tambah', [TkerjaController::class, 'create']);
            Route::post('kerja/simpan', [TkerjaController::class, 'store']);
            Route::get('kerja/edit/{id}', [TkerjaController::class, 'edit']);
            Route::post('kerja/edit/simpan', [TkerjaController::class, 'update']);
            Route::delete('kerja/hapus/{id}', [TkerjaController::class, 'destroy']);

            Route::get('wirausaha', [TwirausahaController::class, 'index']);
            Route::get('tambah_wirausaha', [TwirausahaController::class, 'create']);
            Route::post('tambah_wirausaha/simpan', [TwirausahaController::class, 'store']);
            Route::get('wirausaha/edit/{id}', [TwirausahaController::class, 'edit']);
            Route::post('wirausaha/edit/simpan', [TwirausahaController::class, 'update']);
            Route::delete('wirausaha/hapus/{id}', [TwirausahaController::class, 'destroy']);
            Route::get('wirausaha/detail/{id}', [TwirausahaController::class, 'detail']);
            Route::get('logs_wirausaha', [LogsWirausahaController::class, 'index']);

            Route::get('kaprog', [TkaprogController::class, 'index']);
            Route::get('kaprog/tambah', [TkaprogController::class, 'create']);
            Route::post('kaprog/simpan', [TkaprogController::class, 'store']);
            Route::delete('kaprog/hapus/{id}', [TkaprogController::class, 'destroy']);
            Route::get('kaprog/edit/{id}', [TkaprogController::class, 'edit']);
            Route::post('kaprog/edit/simpan', [TkaprogController::class, 'update']);

            Route::get('confirm', [TberitaController::class, 'confirm']);
            Route::post('confirm/acc', [TberitaController::class, 'acc']);
            Route::post('confirm/rej', [TberitaController::class, 'reject']);
        });

        
        Route::middleware(['AdminOnly:kaprog'])->group(function () {

            Route::get('data-alumni/detail/{id}', [TkaprogController::class, 'show_alumni']);        
            Route::get('data-alumni-kaprog', [TkaprogController::class, 'alumni_kaprog']);        
    // Route::post('kaprog/update/{id}', [TkaprogController::class, 'update']);
        });


// Route::prefix('dashboard')->middleware('OnlyAdmin')->group(function(){
    
});