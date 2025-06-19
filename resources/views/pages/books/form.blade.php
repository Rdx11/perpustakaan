@extends('layouts.app')

@section('title', $vm->title() )

@section('content')
<div class="main-panel">
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Manajemen</h4>
                <ul class="breadcrumbs">
                    <li class="nav-home">
                        <a href="#">
                            <i class="flaticon-agenda-1"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Buku</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">{{ $vm->title() }}</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ $vm->formAction() }}" method="POST" enctype="multipart/form-data">
                        @csrf
                         @if ($vm->formMethod() === 'PUT')
                            @method('PUT')
                        @endif

                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Form {{ $vm->title() }}</div>
                            </div>
                            <div class="card-body">
                                @if ($errors->any())
                                    <x-alert/>
                                @endif
                                <div class="row">
                                    <div class="col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label for="book_code">
                                                Kode Buku
                                                <span class="required-label">*</span>
                                            </label>
                                            <input type="text"
                                            name="book_code"
                                            class="form-control @error('book_code') is-invalid @enderror"
                                            id="book_code"
                                            placeholder="Kode Buku"
                                            value="{{ old('book_code', $vm->default()['book_code']) }}"
                                            required>
                                        </div>
                                        <div class="form-group">
                                            <label for="reg_number">
                                                Nomor Registrasi
                                                <span class="required-label">*</span>
                                            </label>
                                            <input type="text"
                                            name="reg_number"
                                            class="form-control @error('reg_number') is-invalid @enderror"
                                            id="reg_number"
                                            placeholder="Nomor Registrasi"
                                            value="{{ old('reg_number', $vm->default()['reg_number']) }}"
                                            required>
                                        </div>
                                        <div class="form-group">
                                            <label for="publisher">
                                                Penerbit
                                                <span class="required-label">*</span>
                                            </label>
                                            <input type="text"
                                            name="publisher"
                                            class="form-control @error('publisher') is-invalid @enderror"
                                            id="publisher"
                                            placeholder="Penerbit"
                                            value="{{ old('publisher', $vm->default()['publisher']) }}"
                                            required>
                                        </div>
                                        <div class="form-group">
                                            <label for="publication_year">
                                                Tahun Terbit
                                                <span class="required-label">*</span>
                                            </label>
                                            <input type="text"
                                            name="publication_year"
                                            class="form-control @error('publication_year') is-invalid @enderror"
                                            id="publication_year"
                                            placeholder="Tahun Terbit"
                                            value="{{ old('publication_year', $vm->default()['publication_year']) }}"
                                            required>
                                        </div>
                                        <div class="form-group">
                                            <label for="language">
                                                Bahasa
                                                <span class="required-label">*</span>
                                            </label>
                                            <input type="text"
                                            name="language"
                                            class="form-control @error('language') is-invalid @enderror"
                                            id="language"
                                            placeholder="Bahasa"
                                            value="{{ old('language', $vm->default()['language']) }}"
                                            required>
                                        </div>
                                        <div class="form-group">
                                            <label for="copies">
                                                Jumlah Eksampler
                                                <span class="required-label">*</span>
                                            </label>
                                            <input type="number"
                                            name="copies"
                                            class="form-control @error('copies') is-invalid @enderror"
                                            id="copies"
                                            placeholder="Jumlah Eksampler"
                                            value="{{ old('copies', $vm->default()['copies']) }}"
                                            required>
                                        </div>
                                        <div class="form-group">
                                            <label for="isbn">ISBN</label>
                                            <input type="text"
                                            name="isbn"
                                            class="form-control @error('isbn') is-invalid @enderror"
                                            id="isbn"
                                            placeholder="ISBN"
                                            value="{{ old('isbn', $vm->default()['isbn']) }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="sinopsis">Sinopsis</label>
                                            <textarea class="form-control" name="synopsis" id="synopsis" rows="5">
                                                {{ old('synopsis', $vm->default()['synopsis']) }}
                                            </textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="book_cover">Sampul Buku</label>
                                            <input type="file" name="book_cover" class="form-control-file" id="book_cover">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label for="udc_number">
                                                Nomor UDC
                                            <span class="required-label">*</span>
                                        </label>
                                            <input type="text"
                                            name="udc_number"
                                            class="form-control @error('udc_number') is-invalid @enderror"
                                            id="udc_number"
                                            placeholder="Nomor UDC"
                                            value="{{ old('udc_number', $vm->default()['udc_number']) }}"
                                            required>
                                        </div>
                                        <div class="form-group">
                                            <label for="title">
                                                Judul
                                                <span class="required-label">*</span>
                                            </label>
                                            <input type="text"
                                            name="title"
                                            class="form-control @error('title') is-invalid @enderror"
                                            id="title"
                                            placeholder="Judul"
                                            value="{{ old('title', $vm->default()['title']) }}"
                                            required>
                                        </div>
                                        <div class="form-group">
                                            <label for="author">
                                                Penulis
                                                <span class="required-label">*</span>
                                            </label>
                                            <input type="text"
                                            name="author"
                                            class="form-control @error('author') is-invalid @enderror"
                                            id="author"
                                            placeholder="Penulis"
                                            value="{{ old('author', $vm->default()['author']) }}"
                                            required>
                                        </div>
                                        <div class="form-group">
                                            <label for="publication_city">
                                                Kota Terbit
                                                <span class="required-label">*</span>
                                            </label>
                                            <input type="text"
                                            name="publication_city"
                                            class="form-control @error('publication_city') is-invalid @enderror"
                                            id="publication_city"
                                            placeholder="Kota Terbit"
                                            value="{{ old('publication_city', $vm->default()['publication_city']) }}"
                                            required>
                                        </div>
                                        <div class="form-group">
                                            <label for="edition">Edisi</label>
                                            <input type="text"
                                            name="edition"
                                            class="form-control @error('edition') is-invalid @enderror"
                                            id="edition"
                                            placeholder="Edisi"
                                            value="{{ old('edition', $vm->default()['edition']) }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="main_subject">Subjek Utama</label>
                                            <input type="text"
                                            name="main_subject"
                                            class="form-control @error('main_subject') is-invalid @enderror"
                                            id="main_subject"
                                            placeholder="Subjek Utama"
                                            value="{{ old('main_subject', $vm->default()['main_subject']) }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="additional_subject">Subjek Tambahan</label>
                                            <input type="text"
                                            name="additional_subject"
                                            class="form-control @error('additional_subject') is-invalid @enderror"
                                            id="main_subject"
                                            placeholder="Subjek Tambahan"
                                            value="{{ old('additional_subject', $vm->default()['additional_subject']) }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Deskripsi</label>
                                            <textarea class="form-control" name="description" id="description" rows="5">
                                                {{ old('description', $vm->default()['description']) }}
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-action">
                                <button type="submit" class="btn btn-success">{{ $vm->title() }}</button>
                                <a href="{{ route('books.index') }}" class="btn btn-danger">Batal</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <x-footer/>
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
