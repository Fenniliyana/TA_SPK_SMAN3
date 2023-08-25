<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\laporanController;
use App\Http\Controllers\landingController;
use App\Http\Controllers\ekskulController;
use App\Http\Controllers\kriteriaController;
use App\Http\Controllers\siswaController;
use App\Http\Controllers\potensiController;
use App\Http\Controllers\MailController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('send-mail',[MailController::class, 'index']);

Route::controller(AuthController::class)->group( function () {
    Route::get('login','login')->name('login');
    Route::post('proses','prosesLogin');
    Route::get('register','register');
    Route::post('daftar','daftar');
    Route::get('logout','logout');
    Route::get('verifikasi/{id}/{status}','verifikasi');
    Route::get('lupaPassword','lupaPassword');
    Route::post('lupaPassword/cek','sendForgot');
    Route::get('forgot/{id}','CekPassword');
    Route::post('forgot/newpassword','NewPassword');
    Route::prefix('user')->group(function(){
        Route::get('/','index');
        Route::get('add','create');
        Route::get('edit','edit');
        Route::get('delete','delete');
        Route::post('add','store');
        Route::post('edit','update');
    });
});
Route::controller(landingController::class)->group(function(){
    Route::get('/','index');
});

Route::middleware('auth')->group(function () {
    Route::get('dashboard',[DepanController::class,'index']);
    //page laporan
    Route::prefix('laporan')->group(function(){
        Route::controller(laporanController::class)->group(function(){
            //add
            Route::post('create','add');
            //end add
            Route::get('bulanan','bulanan');
            Route::get('triwulan','triwulan');
            Route::get('semester','semester');      
            Route::get('tahunan','tahunan');  
        });
    });
    //ekstrakulikuler
    Route::prefix('ekstrakulikuler')->group(function(){
        Route::controller(ekskulController::class)->group(function(){
            Route::get('/','index');
            Route::post('add','add');
            Route::get('hapus/{id}','delete');
            Route::post('edit/{id}','edit');
            Route::post('editGambar/{id}','editFoto');

        });
    });

    Route::get('profil',[siswaController::class,'profil']);
    Route::post('profil/update',[siswaController::class,'profilUpdate']);
    
    //rule
    Route::prefix('rule')->group(function(){
        Route::get('perangkingan', [siswaController::class,'perangkingan']);
        Route::get('perangkingan/siswa', [siswaController::class,'createRank']);
        Route::get('perangkingan/siswa/maxawal', [siswaController::class,'nilaiMaxAwal']);
        Route::get('perangkingan/siswa/maxakhir', [siswaController::class,'nilaiMaxiAkhir']);
        Route::get('perangkingan/siswa/reset', [siswaController::class,'resetRank']);

        //kriteria
        Route::controller(kriteriaController::class)->group(function(){
            Route::get('kriteria','index');
            Route::post('kriteria/add','addkriteria');
            Route::post('kriteria/edit/{id}','editKriteria');
            Route::get('kriteria/hapus/{id}','hapusKriteria');
            Route::get('kriteria/utility/{id}','utility');
            Route::post('kriteria/utility/add','addUtility');
            Route::get('kriteria/utility/hapus/{id}','hapusUtility');
            Route::post('kriteria/utility/edit/{id}','editUtility');


        });
        Route::controller(siswaController::class)->group(function(){
            Route::get('siswa','index');
            Route::get('siswa/potensi/{id}','potensi');
            // Route::post('kriteria/add','addkriteria');
            // Route::post('kriteria/utility/add','addUtility');
        });
    });
    Route::prefix('potensi')->group(function(){
        Route::controller(potensiController::class)->group(function(){
            Route::get('/','kriteria1');
            Route::post('next1','next1');
            Route::get('nilai-maximal','nilaiMaximal');
        });
    });


});


