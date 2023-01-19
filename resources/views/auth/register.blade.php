@extends('layouts.includes.auth.background')

@section('content')
    <div class="wrap-login100">
        <form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
        @csrf
            <span class="login100-form-logo">
                <i class="logo">
                    <img src="{{ asset('auth/images/icons/logoutama.png')}}" alt="" class="img-fluid">
                </i>
            </span>
            <span class="login100-form-title p-b-34 p-t-27">
                Silahkan Daftar
            </span>

            <div class="wrap-input100 validate-input">
                <input class="input100 @error('name') is-invalid @enderror" placeholder="Nama Lengkap" id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name">
                <span class="focus-input100" data-placeholder="&#xf207;"></span>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="wrap-input100 validate-input" data-validate="Enter email">
                <input class="input100 @error('email') is-invalid @enderror" placeholder="Email" id="email" type="email" name="email" required autocomplete="email" value="{{ old('email') }}">
                <span class="focus-input100" data-placeholder="&#xf15a;"></span>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="wrap-input100 validate-input" data-validate="Enter password">
                <input class="input100 @error('password') is-invalid @enderror" placeholder="Kata Sandi" id="password" type="password" name="password" required autocomplete="new-password">
                <span class="focus-input100" data-placeholder="&#xf191;"></span>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="wrap-input100 validate-input">
                <input class="input100 @error('password') is-invalid @enderror" placeholder="Ulangi Kata Sandi" id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
                <span class="focus-input100" data-placeholder="&#xf191;"></span>
            </div>

            <div class="container-login100-form-btn">
                <button type="submit" class="login100-form-btn">
                    {{ __('DAFTAR') }}
                </button>
            </div>
        </form>
    </div>
@endsection