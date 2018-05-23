<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="/css/app.css" />
    <title>@yield('title')</title>
</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container">
            <div class="row w-100 no-gutters d-lg-flex d-flex flex-wrap justify-content-between">
                <a class="navbar-brand col-lg-3 col-7 py-lg-3 order-lg-1 order-2 float-left d-block" href="Bootstrap 4 Navbar">
                    <img src="//placehold.it/150x48?text=logo" class="img-fluid">
                </a>
                <div class="navbar-text col-lg-6 col-12 order-lg-2 order-1 text-right float-right align-self-end">
                    <ul  class="navbar-nav justify-content-end ml-auto w-40">

                        <li class="nav-item active">
                            <a class="nav-link" href="#">My Valley Tech<span class="sr-only"></span></a>
                        </li>
                        <span class="navbar-slash">|</span>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Apply<span class="sr-only"></span></a>
                        </li>
                        </ul>
                </div>
                <button class="navbar-toggler collapsed float-right order-3" type="button" data-toggle="collapse" data-target="#all-pages-176" aria-controls="all-pages-176" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div id="all-pages-176" class="navbar-collapse collapse float-right col-lg order-4">
                    <ul  class="navbar-nav justify-content-between ml-auto w-75">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Future Students</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Financial Aid</a>
                                <a class="dropdown-item" href="#">Schedule Visit</a>
                                <a class="dropdown-item" href="#">Apply</a>
                            </div>
                        </li>
                        <span class="navbar-slash">/</span>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Online<span class="sr-only">(current)</span></a>
                        </li>
                        <span class="navbar-slash">/</span>
                        <li class="nav-item">

                            <a class="nav-link" href="#">On Campus</a>
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
        <div class="container-fluid text-center py-4 bg-primary">
            <span class="text-white">Copyright 	&copy; Valley Technical Academy 2018</span>
        </div>
    </footer>



    <script src="/js/app.js"></script>
</body>

</html>
