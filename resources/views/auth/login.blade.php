@extends('layouts.includes.auth.background')

@section('content')
    <div class="wrap-login100">
        <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
        @csrf
            <span class="login100-form-logo">
                <i class="logo">
                    <img src="{{ asset('auth/images/icons/logoutama.png')}}" alt="" class="img-fluid">
                </i>
            </span>
            <span class="login100-form-title p-b-34 p-t-27">
                Silahkan Masuk
            </span>
            <div class="wrap-input100 validate-input" data-validate="Enter email">
                <input class="input100 @error('email') is-invalid @enderror" id="email" type="email" name="email" placeholder="Email" required autocomplete="email" value="{{ old('email') }}">
                <span class="focus-input100" data-placeholder="&#xf15a;"></span>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="wrap-input100 validate-input" data-validate="Enter password">
                <input class="input100 @error('password') is-invalid @enderror" id="password" type="password" name="password" required autocomplete="current-password" placeholder="Kata Sandi">
                <span class="focus-input100" data-placeholder="&#xf191;"></span>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="contact100-form-checkbox">
                <input class="input-checkbox100" id="remember" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="label-checkbox100" for="remember">
                    {{ __('Ingat Saya') }}
                </label>
            </div>

            <div class="container-login100-form-btn">
                <button type="submit" class="login100-form-btn" href="">
                    {{ __('MASUK') }}
                </button>
            </div>
            <div class="text-center p-t-50">
                @if (Route::has('password.request'))
                    <a class="txt1" href="{{ route('password.request') }}">
                        {{ __('Lupa Kata Sandi?') }}
                    </a>
                @endif
            </div>
        </form>
    </div>
@endsection