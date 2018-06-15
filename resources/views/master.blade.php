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
    <nav class="navbar navbar-inverse navbar-expand-lg navbar-dark bg-danger">
        <div class="container">
            <div class="row w-100 no-gutters d-lg-flex d-flex flex-wrap justify-content-between">
                <a class="navbar-brand col-lg-3 col-7 py-lg-3 order-lg-1 order-2 float-left d-block" href="/">
                    <img id="vtaLogo" src="images/VTA-logo-white.png" class="img-fluid">
                </a>
                <div class="navbar-text col-lg-6 col-12 order-lg-2 order-1 text-right float-right align-self-end">
                    <ul class="navbar-nav justify-content-end ml-auto w-40">

                        <li class="nav-item active">
                            <a class="nav-link" href="#">My Valley Tech<span class="sr-only"></span></a>
                        </li>
                        <span class="navbar-slash">|</span>
                        <li class="nav-item active">
                            <a class="nav-link" href="/applicationForm">Apply<span class="sr-only"></span></a>
                        </li>
                    </ul>
                </div>
                <button class="navbar-toggler collapsed float-right order-3" type="button" data-toggle="collapse" data-target="#all-pages-176" aria-controls="all-pages-176" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div id="all-pages-176" class="navbar-collapse collapse float-right col-lg order-4">
                    <ul class="navbar-nav justify-content-between ml-auto w-75">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Future Students</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Financial Aid</a>
                                <a class="dropdown-item" href="#">Schedule Visit</a>
                                <a class="dropdown-item" href="/applicationForm">Apply</a>
                            </div>
                        </li>
                        <span class="navbar-slash">/</span>
                        <li class="nav-item active">
                            <a class="nav-link" href="/courseCatalog">Online<span class="sr-only">(current)</span></a>
                        </li>
                        <span class="navbar-slash">/</span>
                        <li class="nav-item">

                            <a class="nav-link" href="/fullStack">On Campus</a>
                        </li>
                        <span class="navbar-slash">/</span>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Career Plan</a>
                        </li>
                        <span class="navbar-slash">/</span>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Our Story</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Alumni</a>
                                <a class="dropdown-item" href="#">Staff</a>
                            </div>
                        </li>
                        <span class="navbar-slash">/</span>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Partners</a>
                        </li>
                        <span class="navbar-slash">/</span>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Events</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav justify-content-end ml-auto w-50">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Schedule A Visit</a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </nav>
    @yield('body')
    <footer id="footer">
        <div class="container-fluid py-4 bg-danger">
            <div class="container">
                <div class="row justify-content-between w-100">
                    <div class="col-md-3 mb-md-0 mb-3">
                        <p class="mbr-text">
                            <a class="text-white" href="#">ABOUT</a>
                            <br>
                            <a class="text-white" href="#">ADMISSIONS</a>
                            <br>
                            <a class="text-white" href="#">ONLINE</a>
                            <br>
                            <a class="text-white" href="#">ON CAMPUS</a>
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
                        <i class="fab fa-facebook-f fa-2x pr-4"></i>
                        <i class="fab fa-linkedin-in fa-2x pr-4"></i>
                        <i class="fab fa-twitter fa-2x pr-4"></i>
                        <i class="fab fa-instagram fa-2x"></i>
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
