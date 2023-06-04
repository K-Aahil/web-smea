<?php

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

Route::get('/', function () {
    return view('pages/home', [
        "title" => "Home"
    ]);
});

Route::get('/sambutan', function () {
    return view('pages/sambutan', [
        "title" => "Sambutan"
    ]);
});

Route::get('/tentang', function () {
    return view('pages/tentang', [
        "title" => "Tentang kami"
    ]);
});

Route::get('/struktur', function () {
    return view('pages/struktur', [
        "title" => "Struktur Organisasi"
    ]);
});

Route::get('/komite', function () {
    return view('pages/komite', [
        "title" => "Komite"
    ]);
});

Route::get('/kompetensi-keahlian', function () {
    return view('pages/major', [
        "title" => "Kompetensi Keahlian"
    ]);
});

Route::get('/detail-kompetensi-keahlian', function () {
    return view('pages/detail-major', [
        "title" => "Kompetensi Keahlian"
    ]);
});

Route::get('/ekstrakulikuler', function () {
    return view('pages/ekstrakulikuler', [
        "title" => "Ekstrakulikuler"
    ]);
});

Route::get('/detail-ekstrakulikuler', function () {
    return view('pages/detail-ekskul', [
        "title" => "Ekstrakulikuler"
    ]);
});

Route::get('/informasi-kurikulum', function () {
    return view('pages/kurikulum', [
        "title" => "Kurikulum"
    ]);
});

Route::get('/tenaga-pendidik', function () {
    return view('pages/pendidik', [
        "title" => "Pendidik"
    ]);
});

Route::get('/tata-usaha', function () {
    return view('pages/tu', [
        "title" => "Tata Usaha"
    ]);
});

Route::get('/berita-sekolah', function () {
    return view('pages/berita', [
        "title" => "Berita"
    ]);
});

Route::get('/detail-berita', function () {
    return view('pages/detail-berita', [
        "title" => "Berita"
    ]);
});

Route::get('/galeri', function () {
    return view('pages/galeri', [
        "title" => "Galeri"
    ]);
});

