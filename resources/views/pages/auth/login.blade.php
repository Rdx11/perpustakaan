@extends('layouts.auth')

@section('title', 'Masuk')

@section('form')
    <div class="login-aside w-50 d-flex align-items-center justify-content-center bg-white">
        <div class="container container-login container-transparent animated fadeIn">
            <h3 class="text-center">Masuk</h3>
            @if ($errors->any())
                <x-alert />
            @endif
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="login-form">
                    <div class="form-group">
                        <label for="username" class="placeholder"><b>Email</b></label>
                        <input id="email" name="email" type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="password" class="placeholder"><b>Kata Sandi</b></label>
                        <a href="{{ route('password.email') }}" class="link float-right">Lupa Kata Sandi ?</a>
                        <div class="position-relative">
                            <input id="password" name="password" type="password" class="form-control @error('password') is-invalid @enderror" required>
                            <div class="show-password">
                                <i class="icon-eye"></i>
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-action-d-flex mb-3">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="remember" class="custom-control-input" id="rememberme" {{ old('remember') ? 'checked' : '' }}>
                            <label class="custom-control-label m-0" for="rememberme">Ingat Saya</label>
                        </div>
                        <button type="submit" class="btn btn-secondary col-md-5 float-right mt-3 mt-sm-0 fw-bold">Masuk</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
