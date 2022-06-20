@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt-3 p-5">
        <div class="col-4">
            <div style="background-color:#7DB569; width:100%; height:100%">
                <a href="{{url('/')}}"><img src="{{url('frontend/pictures/FundOurCauseNewLogo1.png')}}" width="100" height="90"/></a>
                <p style="margin: 60px 30px 150px 30px;color:white; font-size:22px; font-weight:600">
                    Login to our website to become a donator or start a charity/fund
                </p>
                <span style="margin: 0 0 0 130px;color:white">Login as</span> 
                    <a style="text-decoration:none;color:yellow" href="{{route('admin.login')}}">
                        Admin
                    </a>
                <span style="color:white"> if you are an Admin</span>
            </div>
        </div>
        <div class="col-8 row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-1">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>

                            <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                    <a href="{{ url('auth/facebook') }}" style="margin-top: 20px;background-color:#1A73E8; border-color:#1A73E8" class="btn btn-lg btn-primary btn-block">
                                        <span style="background-color:#fff;padding:9px;margin-left:-15px;border-radius:5px 0 0 5px">
                                            <svg xmlns="http://www.w3.org/2000/svg" style="color:white; margin-top:-2px; margin-left:4px" width="19" height="19" fill="dodgerblue" class="bi bi-facebook" viewBox="0 0 16 16">
                                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                                            </svg>
                                        </span>
                                        <span style="margin-left:15px;font-weight:500"> Sign in with Facebook</span>
                                    </a>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-8 offset-md-4">
                                    <a href="{{ url('auth/google') }}" style="margin-top: 20px;background-color:#1A73E8; border-color:#1A73E8" class="btn btn-lg btn-primary btn-block">
                                        <span style="background-color:#fff;padding:9px;margin-left:-15px;border-radius:5px 0 0 5px">
                                            <svg xmlns="http://www.w3.org/2000/svg" style="color:white; margin-top:-2px; margin-left:4px" width="17" height="17" fill="#E94235" class="bi bi-google" viewBox="0 0 16 16">
                                                <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"/>
                                            </svg>
                                        </span>
                                        <span style="margin-left:15px;font-weight:500"> Sign in with Google</span>
                                    </a>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
