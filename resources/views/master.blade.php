<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="/css/app.css" />
    <link rel="stylesheet" type="text/css" href="/css/slick.css" />
    <link rel="stylesheet" type="text/css" href="/css/slick-theme.css" />
    <title>@yield('title')</title>
</head>
<body>
    @yield('navbar')

    @yield('body')
    <footer id="footer">
        <div class="container-fluid py-4 bg-danger">
            <div class="container">
                <div class="row justify-content-between w-100">
                    <div class="col-md-3 mb-md-0 mb-3">
                        <p class="mbr-text">
                            <a class="text-white" href="#">ABOUT</a>
                            <br>
                            <a class="text-white" href="/applicationForm">ADMISSIONS</a>
                            <br>
                            <a class="text-white" href="/courseCatalog">ONLINE</a>
                            <br>
                            <a class="text-white" href="/fullStack">ON CAMPUS</a>
                            <br>
                            <a class="text-white" href="#">TECH FIELD & CAREER PLAN</a>
                            <br>
                            <a class="text-white" href="#">VALLEY TECH EVENTS</a>
                            <hr>
                            <a class="text-white" href="#">MY VALLEY TECH</a>
                        </p>
                    </div>
                    <div class="col-md-4 text-white text-center">
                        <img id="" src="images/VTA-logo-white.png" alt="">
                        <a href="http://facebook.com/valleytechrgv/"><i class="fab fa-facebook-f fa-2x pr-4" ></i></a>
                        <a href="http://www.linkedin.com/company/valley-technical-academy/"><i class="fab fa-linkedin-in fa-2x pr-4"></i></a>
                        <a href="http://twitter.com/valleytechrgv/"><i class="fab fa-twitter fa-2x pr-4"></i></a>
                        <a href="http://instagram.com/valleytechrgv/"><i class="fab fa-instagram fa-2x"></i></a>

                    </div>
                    <div class="col-md-3 text-white">
                        <p>956-335-3500
                            <br>
                            <br> 801 N. BRYAN RD.
                            <br> MISSION, TX 78572
                        </p>
                        <hr>
                        <a class="text-white" href="#">CONTACT & VISIT</a>
                        <br>
                        <a class="text-white" href="#">WORK AT VALLEY TECH</a>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col">
                        <a class="text-white" href="#">Terms of Service</a>
                        <span class="text-white">|</span>
                        <a class="text-white" href="#">Privacy Policy</a>
                        <br>
                        <span class="text-white">&copy; 2018 Valley Technical Academy. All Rights Reserved</span>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <script src="/js/app.js"></script>
    <!-- <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script> -->
    <!-- <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script> -->
    <script type="text/javascript" src="/js/slick/slick.min.js"></script>

    @yield('bottomjs')
</body>

</html>
