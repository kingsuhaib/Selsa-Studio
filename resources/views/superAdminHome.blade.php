<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Selsa Studio</title>
    <link rel="stylesheet" href="{{ URL::asset('assets/admindb-style.css'); }}">


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
                <a style="text-decoration:none;" href="home"><button class="primary" href="">Dashboard</button></a>

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


    <section class="cc">
        <div class="ccwrap">
            <div class="dleft">
                <script>
                    function refreshTime() {
                const timeDisplay = document.getElementById("time");
                const dateString = new Date().toLocaleTimeString([], {hour: '2-digit', minute: '2-digit', second: '2-digit'});
                const formattedString = dateString.replace(", ", " - ");
                timeDisplay.textContent = formattedString;
              }
              setInterval(refreshTime, 1000);
                function refreshDate() {
                const timeDisplay = document.getElementById("date");
                const dateString = new Date().toLocaleDateString([], {year: 'numeric', month: 'long', day: 'numeric'});
                const formattedString = dateString.replace(", ", " - ");
                timeDisplay.textContent = formattedString;
              }
                setInterval(refreshDate, 1000);
                </script>
                <div class="first">
                    <p class="hello">Hello</p>
                    <p class="name">{{ Auth::user()->name }}</p>
                </div>
                <div class="second">
                    <p class="time" id="time"></p>
                    <p class="date" id="date"></p>
                </div>



            </div>
            <div class="mright">
                <p class="dbhead">
                    Following are the tasks that you<br> can perform!
                </p>
                <hr class="dbhr">
                <div class="dright">
                    <a style="text-decoration:none;" href="/add-portfolio">

                        <div class="s1">
                            <img class="sicon" src="{{ URL::asset('assets/add.png'); }}" alt="">
                            <p class="stext">Add to Portfolio</p>
                        </div>
                    </a>
                    <a style="text-decoration:none;" href="/view">
                        <div class="s2">
                            <img class="sicon" src="{{ URL::asset('assets/view.png'); }}" alt="">
                            <p class="stext">View Projects</p>
                        </div>
                    </a>
                    <a style="text-decoration:none;" href="">
                        <div class="s3">
                            <img class="sicon" src="{{ URL::asset('assets/s3.png'); }}" alt="">
                            <p class="stext">Upcoming</p>
                        </div>
                    </a>



                </div>
                <img class="selsa" src="{{ URL::asset('assets/selsa.png'); }}" alt="">
            </div>

        </div>
    </section>
</body>