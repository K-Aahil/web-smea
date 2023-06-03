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
    return view('pages/home');
});

Route::get('/sambutan', function () {
    return view('pages/sambutan');
});

Route::get('/tentang', function () {
    return view('pages/tentang');
});

Route::get('/struktur', function () {
    return view('pages/struktur');
});

Route::get('/komite', function () {
    return view('pages/komite');
});

Route::get('/kompetensi-keahlian', function () {
    return view('pages/major');
});

Route::get('/ekstrakulikuler', function () {
    return view('pages/ekstrakulikuler');
});

Route::get('/informasi-kurikulum', function () {
    return view('pages/kurikulum');
});