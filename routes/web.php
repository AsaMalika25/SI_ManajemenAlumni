<?php

use App\Http\Controllers\TakunController;
use App\Http\Controllers\TalumniController;
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


Route::get('alumni', [TalumniController::class, 'index']);
Route::get('alumni/tambah', [TalumniController::class, 'create']);
Route::get('akun', [TalumniController::class, 'index']);
Route::get('akun/tambah', [TalumniController::class, 'create']);


// Route::get('berita', [TberitaController::class, 'index']);
// Route::get('berita/tambah', [TberitaController::class, 'create']);

// Route::prefix('dashboard')->middleware('OnlyAdmin')->group(function(){
    
// }