@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="main-panel">
    <div class="container">
        <div class="page-inner">
            <!-- Card -->
            <h4 class="page-title">Dashboard</h4>
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="card p-3">
                        <div class="d-flex align-items-center">
                            <span class="stamp stamp-md bg-secondary mr-3">
                                <i class="fa fa-dollar-sign"></i>
                            </span>
                            <div>
                                <h5 class="mb-1"><b><a href="#">Total Buku</a></b></h5>
                                <small class="text-muted">225</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card p-3">
                        <div class="d-flex align-items-center">
                            <span class="stamp stamp-md bg-success mr-3">
                                <i class="fa fa-shopping-cart"></i>
                            </span>
                            <div>
                                <h5 class="mb-1"><b><a href="#">Total Anggota</a></b></h5>
                                <small class="text-muted">32</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card p-3">
                        <div class="d-flex align-items-center">
                            <span class="stamp stamp-md bg-danger mr-3">
                                <i class="fa fa-users"></i>
                            </span>
                            <div>
                                <h5 class="mb-1"><b><a href="#">Total Staff</small></a></b></h5>
                                <small class="text-muted">163</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card p-3">
                        <div class="d-flex align-items-center">
                            <span class="stamp stamp-md bg-warning mr-3">
                                <i class="fa fa-comment-alt"></i>
                            </span>
                            <div>
                                <h5 class="mb-1"><b><a href="#">Total Transaksi</a></b></h5>
                                <small class="text-muted">16 waiting</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- TimeLine -->
            <h4 class="page-title">Aktivitas Terbaru</h4>
            <div class="col-md-12">
                <div class="card full-height">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="avatar avatar-online">
                                <span class="avatar-title rounded-circle border border-white bg-info">J</span>
                            </div>
                            <div class="flex-1 ml-3 pt-1">
                                <h6 class="text-uppercase fw-bold mb-1">Joko Subianto <span class="text-warning pl-3">Ditolak</span></h6>
                                <span class="text-muted">Peminjaman Buku Dengan judul Kimi Itu Asik</span>
                            </div>
                            <div class="float-right pt-1">
                                <small class="text-muted">8:40 PM</small>
                            </div>
                        </div>
                        <div class="separator-dashed"></div>
                        <div class="d-flex">
                            <div class="avatar avatar-offline">
                                <span class="avatar-title rounded-circle border border-white bg-secondary">P</span>
                            </div>
                            <div class="flex-1 ml-3 pt-1">
                                <h6 class="text-uppercase fw-bold mb-1">Prabowo Widodo <span class="text-success pl-3">Disetujui</span></h6>
                                <span class="text-muted">Peminjaman Buku Dengan judul Kimi Itu Asik</span>
                            </div>
                            <div class="float-right pt-1">
                                <small class="text-muted">1 Day Ago</small>
                            </div>
                        </div>
                        <div class="separator-dashed"></div>
                        <div class="d-flex">
                            <div class="avatar avatar-away">
                                <span class="avatar-title rounded-circle border border-white bg-danger">L</span>
                            </div>
                            <div class="flex-1 ml-3 pt-1">
                                <h6 class="text-uppercase fw-bold mb-1">Lee Chong Wei <span class="text-success pl-3">Disetujui</span></h6>
                                <span class="text-muted">Peminjaman Buku Dengan judul Kimi Itu Asik</span>
                            </div>
                            <div class="float-right pt-1">
                                <small class="text-muted">2 Days Ago</small>
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
</div>
@endsection

@push('link')
<link rel="stylesheet" href="{{ asset('css/demo.css') }}">
@endpush

@push('script')
<script src="{{ asset('js/setting-demo2.js') }}"></script>
@endpush
