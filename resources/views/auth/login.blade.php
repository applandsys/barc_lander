@extends('layouts.app')

@section('content')

  <!-- Preloader-->
<div id="preloader">
    <div class="go-meetup-load"></div>
</div>
<!-- Start Header Area -->
<header class="header navbar-area style2">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="nav-inner">
                    <!-- Start Navbar -->
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand style2" href="">
                            <img src="assets/images/logo/logo.png" alt="Logo">
                        </a>
                        <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>
                    </nav>
                    <!-- End Navbar -->
                </div>
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</header>
<!-- End Header Area -->


<!-- Start Hero Area -->
<section id="home" class="hero-area style2">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 col-12">
                <div class="hero-image wow fadeInRight" data-wow-delay=".4s">
                    <img src="assets/images/hero/woman-image.png" alt="#">
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12">
                <div class="hero-content wow fadeInLeft" data-wow-delay=".3s">
                    <h1> User Login </h1>

                    <form method="POST" action="{{ route('login') }}" class="trial-form">
                        @csrf
                        <div class="form-group mb-2">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                         </div>

                         <div class="form-group mb-2">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                         </div>

                         <div class="form-group mb-2">
                            <input  style="    width: 48px;
                            font-size: 13px;
                            height: 20px;
                            height: 21px;
                            margin: 1px;
                            border-radius: 6px;
                        }" class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                         </div>


                         <div class="form-group" style="float: right;
                         margin-right: 14px;">
                             <div class="button">
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


                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Hero Area -->
@endsection
