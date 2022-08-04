@extends('layouts.auth');

@section('content')

<div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 login-section-wrapper">
        <div class="brand-wrapper">
          <img src="assets/images/logo.jpeg" style="height: 50px" alt="logo" class="logo">
        </div>
        <div class="login-wrapper my-auto">
          <h1 class="login-title">Sales & Inventory Management</h1>
          <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
              <label for="email">{{ __('Email Address') }}</label>
              <input id="email" type="email" placeholder="email@example.com" class="form-control  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>
            <div class="form-group mb-4">
              <label for="password">{{ __('Password') }}</label>
              <input id="password" type="password" placeholder="enter your passsword" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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
            <input name="login" id="login" class="btn btn-block login-btn" type="submit" value="Login">
          </form>
          @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
        </div>
      </div>
      <div class="col-sm-6 px-0 d-none d-sm-block">
        <img src="assets/images/login.jpg" alt="login image" class="login-img">
      </div>
    </div>
  </div>

@endsection
