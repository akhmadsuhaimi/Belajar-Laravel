<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\beritacontroller;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\pegawaicontroller;
use App\Http\Controllers\jabatancontroller;
use App\Http\Controllers\pengajuancontroller;
use App\Http\Controllers\suratcontroller;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ admincontroller::class,'login' ])->name('login');
Route::get('/logout', [ adminController::class,'logout' ]);
Route::post('/postlogin', [ admincontroller::class,'postlogin' ])->name('postlogin');

Route::get('/', [ admincontroller::class,'tampilHalamanberita' ]);
Route::get('/struktur-desa', [ admincontroller::class,'struktur' ]);

Route::get('/Single-Berita-{url}', [ beritacontroller::class,'singleBerita' ]);
Route::get('/Single-Pegawai-{id}', [ pegawaicontroller::class,'singlePegawai' ]);

Route::get('/Tambah-Surat', [ suratcontroller::class,'TambahSurat' ]);
Route::post('/Simpan-Surat', [ suratcontroller::class,'simpanSurat' ]);

Route::get('/Tambah-Admin', [ admincontroller::class,'tambahAdmin' ]);
Route::post('/Simpan-Admin', [ admincontroller::class,'simpanAdmin' ]);


Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [ admincontroller::class,'dashboard' ]);

    //berita
    Route::get('/data-berita', [ beritacontroller::class,'tampilberita' ]);
    Route::get('/tambah-berita', [ beritacontroller::class,'tambahberita' ]);
    Route::post('/simpan-berita', [ beritacontroller::class,'simpanberita' ]);
    Route::get('/update-berita{id}', [ beritacontroller::class,'Update' ]);
    Route::post('/perubahan-berita/{id}', [ beritacontroller::class,'simpanPerubahan' ]);
    route::get('/hapus-berita/{id}',[ beritaController::class,'hapusberita' ]);

    Route::get('/pegawai-admin', [ pegawaicontroller::class,'adminPegawai' ]);
    Route::get('/tambah-pegawai', [ pegawaicontroller::class,'tambahpegawai' ]);
    Route::post('/simpan-pegawai', [ pegawaicontroller::class,'simpanpegawai' ]);
    Route::get('/update-pegawai{id}', [ pegawaicontroller::class,'UpdatePegawai' ]);
    Route::post('/perubahan-pegawai/{id}', [ pegawaicontroller::class,'simpanPerubahan' ]);
    route::get('/hapus-pegawai/{id}',[ pegawaicontroller::class,'hapuspegawai' ]);

    Route::get('/jabatan', [ jabatancontroller::class,'jabatan' ]);
    Route::get('/tambah-jabatan', [ jabatancontroller::class,'tambahjabatan' ]);
    Route::post('/simpan-jabatan', [ jabatancontroller::class,'simpanjabatan' ]);
    Route::get('/update-jabatan{id}', [ jabatancontroller::class,'Update' ]);
    Route::post('/perubahan-jabatan/{id}', [ jabatancontroller::class,'simpanPerubahan' ]);
    route::get('/hapus-jabatan/{id}',[ jabatancontroller::class,'hapusjabatan' ]);

    Route::get('/pengajuan', [ pengajuancontroller::class,'Pengajuan' ]);
    Route::get('/tambah-pengajuan', [ pengajuancontroller::class,'tambahpengajuan' ]);
    Route::post('/simpan-pengajuan', [ pengajuancontroller::class,'simpanpengajuan' ]);
    Route::get('/update-pengajuan{id}', [ pengajuancontroller::class,'Updatepengajuan' ]);
    Route::post('/perubahan-pengajuan/{id}', [ pengajuancontroller::class,'simpanPerubahan' ]);
    route::get('/hapus-pengajuan/{id}',[ pengajuancontroller::class,'hapuspengajuan' ]);

    Route::get('/dashboard', [ suratcontroller::class,'TampilSurat' ]);
});
