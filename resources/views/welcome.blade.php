<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ URL::asset('assets/home-style.css'); }}">


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
                <button class="secondary">Log In</button>
                <button class="primary">Register</button>
            </div>
        </div>
    </section>




    {{-- ========================================== --}}



    <!-- HERO 1 -->


    <section class="home">
        <div class="hero">
            <div class="left1">
                <p class="hl" style="color: #4325F9;">selsa studio</p>
                <p class="home-head">We help brands <span>skyrocket</span><br>
                    with amazing branding!</p>
                <p class="home-text">We are a branding agency that provides to be a one-stop-shop branding solution for
                    all
                    the startups and
                    long running valuable businesses.</p>
                <div class="btnpair">
                    <button class="primary">
                        <span>Make an Order <img style="margin-left:8px;min-width:13px;"
                                src="{{ URL::asset('assets/arrow-right.png'); }}" alt="">
                        </span>
                    </button>
                    <button class="secondary">Explore</button>

                </div>
            </div>
            <div class="right1">
                <img class="mainimg" src="{{ URL::asset('assets/home-main.png'); }}" alt="">
            </div>
        </div>

    </section>





    {{-- ========================================== --}}



    <!-- BRANDS/CURRENT CUSTOMERS -->

    <section class="cc">
        <div class="ccwrap">
            <p class="cc-head">Our valuable customers</p>
            <hr style="width: 150px; height: 2px; border-style:none;background-color: #D0D7DA;">
            <div class="logos">
                <img class="logosimgs" src="{{ URL::asset('assets/1.png'); }}" alt="">
                <img class="logosimgs" src="{{ URL::asset('assets/2.png'); }}" alt="">
                <img class="logosimgs" src="{{ URL::asset('assets/3.png'); }}" alt="">
                <img class="logosimgs" src="{{ URL::asset('assets/4.png'); }}" alt="">
                <img class="logosimgs" src="{{ URL::asset('assets/5.png'); }}" alt="">
                <img class="logosimgs" src="{{ URL::asset('assets/6.png'); }}" alt="">
            </div>
        </div>
    </section>





    {{-- ========================================== --}}



    <!-- Services -->

    <section class="services">
        <div class="left2">
            <p class="hl2" style="color: #FC3B3B;">services</p>
            <p class="service-head">The <span>astonishing</span>
                jobs<br>we do for your<br>businesses</p>
        </div>
        <div class="right2">
            <div class="s1">
                <img class="sicon" src="{{ URL::asset('assets/s1.png'); }}" alt="">
                <p class="stext">Logos</p>
            </div>
            <div class="s2">
                <img class="sicon" src="{{ URL::asset('assets/s2.png'); }}" alt="">
                <p class="stext">Packaging</p>
            </div>
            <div class="s3">
                <img class="sicon" src="{{ URL::asset('assets/s3.png'); }}" alt="">
                <p class="stext">Branding</p>
            </div>
        </div>
    </section>




    {{-- ========================================== --}}



    <!-- PACKAGES/PRICING -->

    <section class="services">
        <div class="left3">
            <div class="p1">
                <p class="hl-p" style="color: #1e1e1e; margin-bottom:12px; margin-top:20px;">basic</p>
                <p class="pack-text" style="font-size: 52px; color:#1e1e1e;">Logo</p>
                <p class="pack-text" style="font-size: 22px; color:#1e1e1e;">3 Logo concepts<br>
                    Unlimited Revisions<br>
                    5 different Mockups</p>
                <p class="pack-text" style="font-size: 52px; color:#1e1e1e; margin-bottom:32px;">$299</p>
                <button class="primary">
                    <span>Make an Order <img style="margin-left:8px;min-width:13px;"
                            src="{{ URL::asset('assets/arrow-right.png'); }}" alt="">
                    </span>
                </button>
            </div>
            <div class="p2">
                <p class="hl-p" style="color: #fff; margin-bottom:12px; margin-top:20px;">pro</p>
                <p class="pack-text" style="font-size: 52px; color:#fff;">Branding</p>
                <p class="pack-text" style="font-size: 22px; color:#fff;">Complete branding<br>
                    Logos, Banners, Icons<br>
                    50+ Mockups</p>
                <p class="pack-text" style="font-size: 52px; color:#fff; margin-bottom:32px;">$299</p>
                <button class="primary">
                    <span>Make an Order <img style="margin-left:8px;min-width:13px;"
                            src="{{ URL::asset('assets/arrow-right.png'); }}" alt="">
                    </span>
                </button>
            </div>
            <div class="p3">
                <p class="hl-p" style="color: #1e1e1e; margin-bottom:12px; margin-top:20px;">premium</p>
                <p class="pack-text" style="font-size: 52px; color:#1e1e1e;">Packaging</p>
                <p class="pack-text" style="font-size: 22px; color:#1e1e1e;">Complete branding<br>
                    Logos, Banners, Icons<br>
                    Product Packaging</p>
                <p class="pack-text" style="font-size: 52px; color:#1e1e1e; margin-bottom:32px;">$299</p>
                <button class="primary">
                    <span>Make an Order <img style="margin-left:8px;min-width:13px;"
                            src="{{ URL::asset('assets/arrow-right.png'); }}" alt="">
                    </span>
                </button>
            </div>
        </div>
        <div class="right3">
            <p class="hl3" style="color: #9B3BFC;">pricing</p>
            <p class="pricing-head">The <span>astonishing</span>
                jobs<br>we do for your<br>businesses</p>


        </div>
    </section>






    {{-- ========================================== --}}



    <!-- Portfolio -->




    <section class="portfolio">
        <div class="pdiv1">
            <p class="hl4" style="color: #21D195;">portfolio</p>
            <p class="portfolio-head">Take a look at our<br> <span>stunning</span>
                work</p>
        </div>
        <div class="pdiv2">
            <div class="pics1">
                <div class="picleft">
                    <img src="{{ URL::asset('assets/portfolio/pp1.png'); }}" class="ppic" alt="">
                </div>
                <div class="picright">
                    <img src="{{ URL::asset('assets/portfolio/pp2.png'); }}" class="ppic" alt="">
                    <img src="{{ URL::asset('assets/portfolio/pp3.png'); }}" class="ppic" alt="">
                </div>
            </div>
            <div class="pics2">
                <img src="{{ URL::asset('assets/portfolio/pp4.png'); }}" class="ppic" alt="">
                <img src="{{ URL::asset('assets/portfolio/pp5.png'); }}" class="ppic" alt="">
                <img src="{{ URL::asset('assets/portfolio/pp6.png'); }}" class="ppic" alt="">
                <img src="{{ URL::asset('assets/portfolio/pp7.png'); }}" class="ppic" alt="">
            </div>
        </div>
        <button class="primary-green" style="width: fit-content;">
            <span>View Complete Portfolio <img style="margin-left:8px;min-width:13px;"
                    src="{{ URL::asset('assets/arrow-right.png'); }}" alt="">
            </span>
        </button>
    </section>





    {{-- ========================================== --}}



    <!-- Newsletter -->



    <section class="mail" style="margin-bottom: 96px;">
        <div class="mailwrapper">
            <p class="hl5" style="color: #fff;">newsletter</p>
            <p class="mail-head">Subscribe to our daily <br> <span>newsletter</span>
            </p>
            <div class="mailbox">
                <form action="">
                    <input class="mailinput" type="text" id="" name="" placeholder="Email">
                    <button class="primary">
                        <span>Subscribe <img style="margin-left:8px;min-width:13px;"
                                src="{{ URL::asset('assets/arrow-right.png'); }}" alt="">
                        </span>
                    </button>
                </form>
            </div>
        </div>

    </section>




    {{-- ========================================== --}}



    <!-- About -->





    <section class="about">
        <div class="left4">
            <p class="hl6" style="color: #1E30D5;">about us</p>
            <p class="about-head">Know more about us<br>
                at <span>selsa</span></p>
        </div>
        <div class="right4">
            <div class="a1">
                <p class="atext">About Us</p>
                <p class="atext2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt
                    ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                    dolore eu
                    fugiat nulla pariatur.</p>
            </div>
            <div class="a2">
                <p class="atext">Our Mission</p>
                <p class="atext2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt
                    ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                    dolore eu
                    fugiat nulla pariatur.</p>
            </div>
            <div class="a3">
                <p class="atext">Our Vision</p>
                <p class="atext2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt
                    ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                    dolore eu
                    fugiat nulla pariatur.</p>
            </div>
        </div>
    </section>





    {{-- ========================================== --}}



    <!-- More -->


    <section class="more">
        <div class="mwrap">
            <p class="hl7" style="color: #37A9E9;">more</p>
            <p class="more-head">Interested to know <span>more</span>?
            </p>
        </div>

        <div class="btnpair">
            <button class="primary">
                <span>Make an order <img style="margin-left:8px;min-width:13px;"
                        src="{{ URL::asset('assets/arrow-right.png'); }}" alt="">
                </span>
            </button>
            <button class="secondary">Leave us a message</button>

        </div>
    </section>




    {{-- ========================================== --}}



    <!-- FOOTER -->



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
                        <a class="m1a" href="">Home</a>
                        <a class="m1a" href="">Services</a>
                        <a class="m1a" href="">Pricing</a>
                        <a class="m1a" href="">Portfolio</a>
                        <a class="m1a" href="">About Us</a>
                    </div>
                    <div class="menu2">
                        <a class="m1a" href="">Log In</a>
                        <a class="m1a" href="">New user? - Sign Up</a>
                    </div>
                    <div class="menu3">
                        <p class="copyright">2022 All rights reserved.
                            This website is designed on Figma and built using HTML, CSS, Bootstrap, Laravel and PHP.</p>
                        <div class="socials">
                            <img src="{{ URL::asset('assets/fb.png'); }}" style="width: 26px;" alt="">
                            <img src="{{ URL::asset('assets/in.png'); }}" style="width: 26px;" alt="">
                            <img src="{{ URL::asset('assets/db.png'); }}" style="width: 26px;" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>