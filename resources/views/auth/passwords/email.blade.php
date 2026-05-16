@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Reset Password') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('password.email') }}" id="resetPasswordForm">
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

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit"
                                        class="btn btn-primary w-100 d-flex justify-content-center align-items-center gap-2"
                                        id="resetBtn">

                                        <span id="resetBtnText">
                                            {{ __('Send Password Reset Link') }}
                                        </span>

                                        <img src="{{ asset('images/ally-loader_yellow.gif') }}" id="resetLoader"
                                            style="display: none; width: 28px; height: 28px;" alt="Loading">
                                    </button>
                                </div>
                            </div>
                        </form>

                        <script>
                            document.addEventListener("DOMContentLoaded", function () {

                                const form = document.getElementById("resetPasswordForm");
                                const button = document.getElementById("resetBtn");
                                const loader = document.getElementById("resetLoader");
                                const text = document.getElementById("resetBtnText");

                                form.addEventListener("submit", function (e) {

                                    // Prevent double click
                                    button.disabled = true;

                                    // Hide text
                                    text.style.display = "none";

                                    // Show loader
                                    loader.style.display = "inline-block";

                                    // Force repaint before form submits
                                    setTimeout(() => {
                                        form.submit();
                                    }, 100);

                                    e.preventDefault();
                                });

                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection