<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Selsa Studio</title>
    <link rel="stylesheet" href="{{ URL::asset('assets/login-style.css'); }}">
    {{--
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    --}}

</head>

<body>

    <!-- NAVBAR -->

    <section class="navbar">
        <!-- LOGO DIV -->
        <div class="left">
            <a href="/" style="text-decoration: none;"><img src="{{ URL::asset('assets/navlogo.png'); }}" alt=""></a>
        </div>
        <!-- MENU+BUTTONS DIV -->
        <div class="right">
            <div class="menu">
                <a href="/" style="text-decoration: none; color:#849fa8;">
                    <li href="" style="margin-right:-35px;">Home</li>
                </a>
                <a href="/#services" style="text-decoration: none; color:#849fa8;">
                    <li href="" style="margin-right:-14px;">Services</li>
                </a>
                <a href="/#packages" style="text-decoration: none; color:#849fa8;">
                    <li href="">Packages</li>
                </a>
                <a href="/portfolio" style="text-decoration: none; color:#849fa8;">
                    <li href="" style="margin-right:-15px;">Portfolio</li>
                </a>
                <a href="/#about" style="text-decoration: none; color:#849fa8;">
                    <li href="">About</li>
                </a>
            </div>
            <div class="onboard">
                @guest
                @if (Route::has('login'))
                <a style="text-decoration:none;" href="{{ route('login') }}"><button class="secondary" href="">Log
                        In</button></a>
                @endif

                @if (Route::has('register'))
                <a style="text-decoration:none;" href="{{ route('register') }}"><button class="primary"
                        href="">Register</button></a>
                @endif

                @else
                <a style="text-decoration:none;" href="/home"><button class="primary" href="">Dashboard</button></a>

                <a style="text-decoration:none;" href="{{ route('logout') }}"" onclick=" event.preventDefault();
                    document.getElementById('logout-form').submit();"><button class="secondary" href="">Log
                        Out</button></a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                @endguest

            </div>
        </div>
    </section>


    <section class="home">
        <div class="hero">
            <div class="left1">
                <p class="hl" style="color: #4325F9;">selsa studio</p>
                <p class="home-head">Make an order by<br><span>Logging In</span>
                    now!</p>
                <p class="home-text">Use the details you made your account with to get back into our system and order a
                    new project or inquire about a previous one!</p>
                <p class="home-text">Don't have an account?</p>
                <div class="btnpair">
                    <a style="text-decoration:none;" href="{{ route('register') }}">
                        <button class="primary">
                            <span>Register <img style="margin-left:8px;min-width:13px;"
                                    src="{{ URL::asset('assets/arrow-right.png'); }}" alt="">
                            </span>
                        </button>
                    </a>


                </div>
            </div>
            <div class="right1">

                <div class="ccwrap">
                    <p class="cc-head">Enter your details</p>
                    <hr style="width: 150px; height: 2px; border-style:none;background-color: #D0D7DA;">

                    <div class="formdiv">
                        <form style="display: flex; flex-direction:column; gap:24px;" method="POST"
                            action="{{ route('login') }}">

                            @csrf

                            <div class="email" style="display: flex; flex-direction:column; gap:12px;">
                                <label for="email" class="m">Your Email</label>
                                <input id="email" type="email" class="mailinput" name="email" value="{{ old('email') }}"
                                    required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="pass" style="display: flex; flex-direction:column; gap:12px;">
                                <label for="password" class="m">Your Password</label>
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <button type="submit" class="primary">
                                <span>Login <img style="margin-left:8px;min-width:13px;"
                                        src="{{ URL::asset('assets/arrow-right.png'); }}" alt="">
                                </span>
                            </button>
                            <button class="secondary">Forgot Password</button>
                        </form>
                    </div>

                </div>
            </div>

        </div>
        </div>

    </section>
</body>



<section class="footer">
    <hr class="hr1">
    <div class="footwrap">
        <div class="leftf">
            <img src="{{ URL::asset('assets/footer-logo.png'); }}" style="width: 230px; margin-bottom:20px;" alt="">
            <p class="title">Selsa Studio</p>
            <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        </div>
        <div class="rightf">
            <p class="foot-head">Where<span> imagination</span> becomes <span>
                    reality</span>.
            </p>
            <hr class="hr1">
            <div class="fmenus">
                <div class="menu1">
                    <a class="m1a" href="/">Home</a>
                    <a class="m1a" href="/#services">Services</a>
                    <a class="m1a" href="/#packages">Pricing</a>
                    <a class="m1a" href="/portfolio">Portfolio</a>
                    <a class="m1a" href="/#about">About Us</a>
                </div>
                <div class="menu2">
                    <a class="m1a" href="/login">Log In</a>
                    <a class="m1a" href="/register">New user? - Sign Up</a>
                </div>
                <div class="menu3">
                    <p class="copyright">2022 All rights reserved.
                        This website is designed on Figma and built using HTML, CSS, Bootstrap, Laravel and PHP.</p>
                    <div class="socials">
                        <a href="https://www.facebook.com/selsa.studio/" class="m1a"><img
                                src="{{ URL::asset('assets/fb.png'); }}" style="width: 26px;" alt=""></a>
                        <a href="https://www.instagram.com/selsa.studio/" class="m1a"><img
                                src="{{ URL::asset('assets/in.png'); }}" style="width: 26px;" alt=""></a>
                        <a href="https://dribbble.com/KingSuhaibX" class="m1a"><img
                                src="{{ URL::asset('assets/db.png'); }}" style="width: 26px;" alt=""></a>



                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address')
                                }}</label>

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
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password')
                                }}</label>

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

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{
                                        old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
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
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


--}}