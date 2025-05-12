<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});
Route::get('/tambah-buku', function () {
    return view('pages/books/create');
});
Route::get('/tambah-pengguna-pelajar', function () {
    return view('pages/students/create');
});
Route::get('/tambah-pengguna-non-pelajar', function () {
    return view('pages/non-students/create');
});
Route::get('/tambah-staff', function () {
    return view('pages/staff/create');
});
Route::get('/transaksi/peminjaman', function () {
    return view('pages.transactions.create-borrow');
});
Route::get('/transaksi/pengembalian', function () {
    return view('pages.transactions.create-return');
});
Route::get('laporan', function () {
    return view('pages.reports.create-report-book');
});
Route::get('laporan/buku', function(){
    return view('pages.reports.result-report-book');
});
Route::get('laporan/anggota', function(){
    return view('pages.reports.result-report-member');
});
Route::get('laporan/peminjaman', function(){
    return view('pages.reports.result-report-borrow');
});
Route::get('laporan/pengembalian', function(){
    return view('pages.reports.result-report-return');
});
Route::get('laporan/denda', function(){
    return view('pages.reports.result-report-fine');
});
Route::get('blank-page', function(){
    return view('blank');
});
