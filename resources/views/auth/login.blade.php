@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card my-5">
                    <div class="card-header">{{ __('Login') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}" id="directLoginForm">
                            @csrf

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">
                                    {{ __('Email Address') }}
                                </label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">
                                    {{ __('Password') }}
                                </label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- Hidden form type to bypass popup logic --}}
                            <input type="hidden" name="form_type" value="direct_login">

                            {{-- reCAPTCHA token --}}
                            <input type="hidden" name="g-recaptcha-response" id="direct-login-recaptcha">

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary" id="directLoginBtn">
                                        <span class="btn-text">{{ __('Login') }}</span>
                                        <img src="{{ asset('images/ally-loader_yellow.gif') }}" id="directLoginLoader"
                                            style="display:none; width:30px;" alt="Processing">
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>

                        <script>
                            document.getElementById("directLoginForm").addEventListener("submit", function (e) {
                                e.preventDefault();

                                grecaptcha.execute("{{ config('recaptcha.site_key') }}", { action: 'login' })
                                    .then(function (token) {

                                        document.getElementById("direct-login-recaptcha").value = token;

                                        document.querySelector("#directLoginBtn .btn-text").style.display = "none";
                                        document.getElementById("directLoginLoader").style.display = "inline";

                                        e.target.submit();
                                    });
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection