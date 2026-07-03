<?php

use Illuminate\Support\Facades\Route;

// ==================================================
// ++++++++++++++++ PAGE depan start ++++++++++++++++
// ==================================================
Route::get('/', function () {
    return view('depan.index');
})->name('home');

Route::get('/profil', function () {
    return view('depan.profil');
})->name('profil');

Route::get('/sejarah', function () {
    return view('depan.sejarah');
})->name('sejarah');

Route::get('/struktur', function () {
    return view('depan.struktur');
})->name('struktur');

Route::get('/pimpinan-staff', function () {
    return view('depan.pimpinan-staff');
})->name('pimpinan-staff');

Route::get('/layanan-1', function () {
    return view('depan.layanan-form1');
})->name('layanan-1');

Route::get('/layanan-2', function () {
    return view('depan.layanan-form2');
})->name('layanan-2');

Route::get('/layanan-3', function () {
    return view('depan.layanan-form3');
})->name('layanan-3');
// ==================================================
// +++++++++++++++++ PAGE depan end +++++++++++++++++
// ==================================================

// ================================================
// +++++++++++++++ PAGE login start +++++++++++++++
// ================================================
Route::get('/belakang/pintu', function () {
    return view('belakang.pintu');
})->name('belakang-pintu');
// ==============================================
// +++++++++++++++ PAGE login end +++++++++++++++
// ==============================================

// ===================================================
// +++++++++++++++ PAGE belakang start +++++++++++++++
// ===================================================
Route::get('/belakang/dashboard', function () {
    return view('belakang.index');
})->name('belakang');

Route::get('/belakang/contoh', function () {
    return view('belakang.website.contoh');
})->name('belakang-contoh');

Route::get('/belakang/kosong', function () {
    return view('belakang.website.kosong');
})->name('belakang-kosong');

Route::get('/belakang/dibangun', function () {
    return view('belakang.website.dibangun');
})->name('belakang-dibangun');

Route::get('/belakang/form', function () {
    return view('belakang.website.form');
})->name('belakang-form');

// =================================================
// +++++++++++++++ PAGE belakang end +++++++++++++++
// =================================================