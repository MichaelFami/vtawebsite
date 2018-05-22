<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="/css/app.css"  />
    <title>@yield('title')</title>
</head>

<body>
    <nav class="py-4 navbar navbar-expand-lg navbar-dark bg-primary">

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Future Students</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Financial Aid</a>
                        <a class="dropdown-item" href="#">Schedule Visit</a>
                        <a class="dropdown-item" href="#">Apply</a>
                    </div>
                </li>
                <span>/</span>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Online<span class="sr-only">(current)</span></a>
                </li>
                <span>/</span>
                <li class="nav-item">

                    <a class="nav-link" href="#">On Campus</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Career Plan</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Our Story</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Alumni</a>
                        <a class="dropdown-item" href="#">Staff</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Partners</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Events</a>
                </li>


            </ul>
            
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
