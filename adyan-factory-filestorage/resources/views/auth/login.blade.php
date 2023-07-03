@extends('layouts.app')

@section('content')
<br><br><br><br><br>
<div class="container d-flex justify-content-center align-items-center ">
    <div class="row justify-content-center col-md-4" >
        <div class="col-md-12">
            <div class="card"><br><br>
                <div class="bi-hexagon-fill me-2 text-center" style="color: #0d6efd;font-size:52px"></div>
                <div class="card-header fw-bold fs-3 text-center">{{ __('Employee Data Master') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        <br>
                        @csrf

                        <div class="row mb-3 d-flex justify-content-center align-items-center">
                            {{-- <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label> --}}

                            <div class="col-md-10 ">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Masukkan Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 d-flex justify-content-center align-items-center">
                            {{-- <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label> --}}

                            <div class="col-md-10">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Masukkan Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> --}}
                        <br>
                        <center>

                            <div class="row mb-0">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary" id="btn-login">
                                        <i class="bi bi-box-arrow-in-right"></i> {{ __('Login') }}
                                    </button>
                                    {{--
                                        @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                        @endif --}}

                                </div>
                            </div>
                        </center>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
