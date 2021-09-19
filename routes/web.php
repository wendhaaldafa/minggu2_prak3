<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\SaranaController;


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

Route::get('/', [HomeController::class,'index']);

Route::prefix('prodi')->group(function () {
    Route::get('/manajemen-informatika', function () {
        return "Program Studi Manajemen Informatika berdiri 24 Juni 2005 berdasarkan SK Mendiknas 
            Nomor : 2001/D/T/2005 di bawah Jurusan Teknik Elektro Politeknik Negeri Malang. Dalam 
            surat keputusan tersebut Politeknik Negeri Malang diberikan ijin untuk menyelenggarakan 
            pendidikan Program Studi Manajemen Informatika untuk jenjang program Diploma (DIII) Politeknik.
            Program Studi Manejemen Informatika melakukan perubahan pada sebagian kurikulumnya menyesuaikan
            perkembangan teknologi informasi dan kebutuhan dunia kerja saat ini. Mulai tahun akademik 2006/2007,
            kurikulum Program Studi Manejemen Informatika menggunakan kurikulum 5-1 (lima semester di kampus dan
            satu semester di Industri) yang ditawarkan dengan jumlah total 120 SKS. Dan mulai tahun 
            2009 s/d sekarang sudah diterapkan kurikulum berbasis proyek untuk semakin mendekatkan mahasiswa 
            pada pengalaman praktik di lapangan"
        ;
    });
    Route::get('/teknik-informatika', function () {
        return "Pada tahun 2010 berdasar kebutuhan masyarakat dan industri terkait Program Diploma IV bidang 
            informatika maka Polinema mendirikan program studi baru Diploma IV (DIV) Teknik Informatika (TI). 
            Pada awal berdirinya jumlah peserta didik Program D-IV TI hanya terdiri dari 46 Mahasiswa, namun pada 
            tahun 2015 jumlah peserta didik Prodi D-IV TI telah mengalami peningkatan menjadi 545 Mahasiswa. Perkembangan 
            jumlah mahasiswa yang sangat pesat baik di Program Studi D-III MI maupun D-IV TI mendorong pimpinan di Polinema 
            untuk menyatukan kedua program studi tersebut dalam satu organisasi jurusan baru terpisah dari jurusan Teknik 
            Elektro. dibawa Jurusan baru terpisah dari Jurusan Teknik Elektro. Dan pada tahun 2015 berdasarkan SK Direktur 
            Nomor 53 dalam rangka peningkatan mutu pengelolaan dan optimasi sumber daya dibentuklah Jurusan Teknologi 
            Informasi (JTI) dengan prodi D-III MI dan D-IV TI
            
            "
        ;
    });
});


Route::get('/news/{id}', [NewsController::class,'news']);

Route::prefix('sarana')->group(function () {
    Route::get('/perkantoran', function () {
        return "Perkantoran dan Ruang Perkantoran";
    });
    Route::get('/laboratorium', function () {
        return "Laboratorium <br><br>
            Lab. Basis data,  Lab. Pemrograman,  Lab. Studio Proyek,  Lab. Image dan Graphics,  Lab. Komputasi dan Jaringan
            Lab. Informatika, dan Lab. Sistem Informasi"
        ;
    });
    Route::get('/kelas', function () {
        return "Ruang Kelas <br><br>
            Jurusan Teknologi Informasi memiliki 2 kriteria ruang kelas yang digunakan untuk melakukan sesi perkuliahan teori. 
            Dua kriteria tersebut antara lain Kelas Reguler (KR) dan Kelas Bersama (KB). KR digunakan untuk perkuliahan dengan 
            peserta kuliah sebanyak 1 kelas (kapasitas ruangan hanya kurang lebih untuk 30 mahasiswa), sedangkan KB digunakan untuk 
            kuliah bersama dari 2 kelas (kapasitas ruangan sebanyak 60 mahasiswa). Lokasi KR dan KB tersebar di 2 gedung, baik 
            gedung AF maupun gedung T.Sipil lt. 7 dan 8."
        ;
    });
    Route::get('/lainnya', function () {
        return "Lainnya <br><br>
            Kantin, Ruang Baca, Ruang Admin, Mushola, dan Lobby
        "
        ;
    });
});

Route::get('/about', [AboutController::class,'about']);

Route::get('/comment/{nama}/pesan/{pesan}', [CommentController::class,'comment']);