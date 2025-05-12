@extends('layouts.app')

@section('title', 'Tambah Pelajar')

@section('content')
<div class="main-panel">
    <div class="container">
        <div class="page-inner">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xl-9">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="page-pretitle">
                                Hasil
                            </h6>
                            <h4 class="page-title">Laporan Denda</h4>
                        </div>
                        <div class="col-auto">
                            <a href="#" class="btn btn-light btn-border">
                                <i class="fas fa-print"></i>
                                Print
                            </a>
                            <a href="#" class="btn btn-primary ml-2">
                                Batal
                            </a>
                        </div>
                    </div>
                    <div class="page-divider"></div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-invoice">
                                <div class="card-header">
                                    <div class="invoice-header">
                                        <div class="invoice-logo">
                                            <img src="{{ asset('img/logo/logo-perpus.png') }}" alt="company logo">
                                        </div>
                                        <h3 class="invoice-title">
                                            PERPUSTAKAAN KOTA BIMA
                                            <div class="invoice-desc">
                                                Jl. Soekarno Hatta, Kec. Mpunda, Kota Bima, NTB.84116
                                            </div>
                                        </h3>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="separator-solid"></div>
                                    <div class="row">
                                        <div class="col-md-6 info-invoice">
                                            <h5 class="sub"> Tanggal</h5>
                                            <p>10 Mei 2025 - 10 Juni 2025</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="invoice-detail">
                                                <div class="invoice-top mb-4 text-center">
                                                    <h3 class="title"><strong>Laporan Penerima Denda</strong></h3>
                                                </div>
                                                <div class="invoice-item">
                                                    <div class="table">
                                                        <table class="table table-striped">
                                                            <thead>
                                                                <tr>
                                                                    <td><strong>No Pinjam</strong></td>
                                                                    <td><strong>Jumlah Pinjam</strong></td>
                                                                    <td><strong>Terlambat/Hari</strong></td>
                                                                    <td><strong>Denda/Hari</strong></td>
                                                                    <td><strong>Total Denda</strong></td>
                                                                    <td><strong>Status</strong></td>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>PJ001</td>
                                                                    <td>5</td>
                                                                    <td>3 hari</td>
                                                                    <td>Rp.3000,00</td>
                                                                    <td>Rp.15000,00</td>
                                                                    <td>Lunas</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>PJ001</td>
                                                                    <td>5</td>
                                                                    <td>3 hari</td>
                                                                    <td>Rp.3000,00</td>
                                                                    <td>Rp.15000,00</td>
                                                                    <td>Lunas</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>PJ001</td>
                                                                    <td>5</td>
                                                                    <td>3 hari</td>
                                                                    <td>Rp.3000,00</td>
                                                                    <td>Rp.15000,00</td>
                                                                    <td>Lunas</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>PJ001</td>
                                                                    <td>5</td>
                                                                    <td>3 hari</td>
                                                                    <td>Rp.3000,00</td>
                                                                    <td>Rp.15000,00</td>
                                                                    <td>Lunas</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="separator-solid  mb-3"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-sm-7 col-md-5 mb-3 mb-md-0 transfer-to">
                                            <div class="account-transfer">
                                            </div>
                                        </div>
                                        <div class="col-sm-5 col-md-7 mt-5 transfer-total">
                                            <h5 class="sub mr-4">Mengetahui, </h5>
                                            <h5 class="sub mb-5 text-right">Kepala Perpustakaan</h5>
                                            <span class="mr-4 mt-2">(Ach. Fathoni)</span>
                                        </div>
                                    </div>
                                    <div class="separator-solid"></div>
                                    <h6 class="text-uppercase mt-4 mb-3 fw-bold">
                                        Catatan
                                    </h6>
                                    <p class="text-muted text-justify mb-0">
                                        Data penerima denda disusun berdasarkan keterlambatan dalam pengembalian buku sesuai dengan aturan yang berlaku di perpustakaan.Informasi ini memuat jumlah anggota yang terkena denda, nominal denda yang dikenakan, dan status pelunasan.Laporan ini diharapkan meningkatkan kepatuhan serta kedisiplinan anggota perpustakaan.
                                    </p>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container-fluid">
            <nav class="pull-left">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="http://www.themekita.com">
                            ThemeKita
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Help
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Licenses
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="copyright ml-auto">
                2018, made with <i class="fa fa-heart heart text-danger"></i> by <a href="http://www.themekita.com">ThemeKita</a>
            </div>
        </div>
    </footer>
    <div class="custom-template">
        <div class="title">Settings</div>
        <div class="custom-content">
            <div class="switcher">
                <div class="switch-block">
                    <h4>Logo Header</h4>
                    <div class="btnSwitch">
                        <button type="button" class="changeLogoHeaderColor" data-color="dark"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="blue"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="purple"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="light-blue"></button>
                        <button type="button" class="changeLogoHeaderColor selected" data-color="green"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="orange"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="red"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="white"></button>
                        <br>
                        <button type="button" class="changeLogoHeaderColor" data-color="dark2"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="blue2"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="purple2"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="light-blue2"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="green2"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="orange2"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="red2"></button>
                    </div>
                </div>
                <div class="switch-block">
                    <h4>Navbar Header</h4>
                    <div class="btnSwitch">
                        <button type="button" class="changeTopBarColor" data-color="dark"></button>
                        <button type="button" class="changeTopBarColor" data-color="blue"></button>
                        <button type="button" class="changeTopBarColor" data-color="purple"></button>
                        <button type="button" class="changeTopBarColor" data-color="light-blue"></button>
                        <button type="button" class="changeTopBarColor selected" data-color="green"></button>
                        <button type="button" class="changeTopBarColor" data-color="orange"></button>
                        <button type="button" class="changeTopBarColor" data-color="red"></button>
                        <button type="button" class="changeTopBarColor" data-color="white"></button>
                        <br>
                        <button type="button" class="changeTopBarColor" data-color="dark2"></button>
                        <button type="button" class="changeTopBarColor" data-color="blue2"></button>
                        <button type="button" class="changeTopBarColor" data-color="purple2"></button>
                        <button type="button" class="changeTopBarColor" data-color="light-blue2"></button>
                        <button type="button" class="changeTopBarColor" data-color="green2"></button>
                        <button type="button" class="changeTopBarColor" data-color="orange2"></button>
                        <button type="button" class="changeTopBarColor" data-color="red2"></button>
                    </div>
                </div>
                <div class="switch-block">
                    <h4>Sidebar</h4>
                    <div class="btnSwitch">
                        <button type="button" class="selected changeSideBarColor" data-color="white"></button>
                        <button type="button" class="changeSideBarColor" data-color="dark"></button>
                        <button type="button" class="changeSideBarColor" data-color="dark2"></button>
                    </div>
                </div>
                <div class="switch-block">
                    <h4>Background</h4>
                    <div class="btnSwitch">
                        <button type="button" class="changeBackgroundColor selected" data-color="bg2"></button>
                        <button type="button" class="changeBackgroundColor" data-color="bg1"></button>
                        <button type="button" class="changeBackgroundColor" data-color="bg3"></button>
                        <button type="button" class="changeBackgroundColor" data-color="dark"></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="custom-toggle">
            <i class="flaticon-settings"></i>
        </div>
    </div>
</div>
@endsection

@push('link')
<link rel="stylesheet" href="{{ asset('css/demo.css') }}">
@endpush

@push('script')
<script src="{{ asset('js/setting-demo2.js') }}"></script>
@endpush
