<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Selsa Studio</title>
    <link rel="stylesheet" href="{{ URL::asset('assets/portfolio-style.css'); }}">


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
                <a href="/portfolio" style="text-decoration: none; color:#1e1e1e;">
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
                <a style="text-decoration:none;" href="/super-admin/home"><button class="primary"
                        href="">Dashboard</button></a>

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
        <p class="hl" style="color: #4325F9;">portfolio</p>
        <p class="home-head">We help brands <span>skyrocket</span><br>
            with amazing branding!</p>
        <p class="home-text">Take a look at our stunning work for our clients.<br> All the work below is purely our
            creation.</p>
    </section>

    <section class="grid">
        @foreach ($products as $product)
        <div class="carddiv" style="background-image:url(/images/{{ $product->image }})">
            <div class="tbg">
                <p class="pt">{{ $product->name }}</p>
                <p class="ptt">{{ $product->detail }}</p>
            </div>
        </div>
        @endforeach
    </section>





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



</body>

</html>