<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ URL::asset('assets/login-style.css'); }}">


</head>

<body>

    <!-- NAVBAR -->

    <section class="navbar">
        <!-- LOGO DIV -->
        <div class="left">
            <img src="{{ URL::asset('assets/navlogo.png'); }}" alt="">
        </div>
        <!-- MENU+BUTTONS DIV -->
        <div class="right">
            <div class="menu">
                <li href="" style="margin-right:-35px;">Home</li>
                <li href="" style="margin-right:-14px;">Services</li>
                <li href="">Packages</li>
                <li href="" style="margin-right:-15px;">Portfolio</li>
                <li href="">About</li>
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
                    <button class="primary">
                        <span>Register <img style="margin-left:8px;min-width:13px;"
                                src="{{ URL::asset('assets/arrow-right.png'); }}" alt="">
                        </span>
                    </button>


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