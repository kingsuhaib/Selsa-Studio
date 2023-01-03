<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Post - Selsa Studio</title>
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
                    Enter the details to<br> add a new post!
                </p>
                <hr class="dbhr">
                <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <label for="name">Title</label>
                    <input type="text" name="name" class="namep" maxlength="20" placeholder="Name">
                    <label for="name">Detail (one line)</label>
                    <input type="text" name="detail" maxlength="70" class="namep" placeholder="Name">
                    <label for="name">Image</label>
                    <input type="file" name="image" class="namep" placeholder="Name">
                    <button class="primary" style="width: 350px; margin-top:24px;   " type="submit">
                        <span>Submit<img style="margin-left:8px;min-width:13px;"
                                src="{{ URL::asset('assets/arrow-right.png'); }}" alt="">
                        </span>
                    </button>
                </form>
            </div>

        </div>
    </section>
</body>