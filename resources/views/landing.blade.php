@extends('master') @section('title') Valley Technical Academy @endsection @section('navbar')
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
                    <li class="nav-item">
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
@endsection @section('body')
<div id="home" class="jumbotron jumbotron-fluid">
    <div class="row mx-4">
        <div class="col text-right">
            <a class="text-white" href="#">HOME</a>
            <span class="text-white">|</span>
            <a class="text-white" href="#">ONLINE COURSES</a>
        </div>
    </div>
    <div class="row mx-4">
        <div class="col">
            <h1 id="jumbotronTitle" class="display-4 float-right text-white">Valley Tech Online Program:</h1>
        </div>
    </div>
    <div class="row mx-4">
        <div class="col">
            <p class="lead float-right text-white">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        </div>
    </div>
</div>
<div id="threeButtons" class="row mx-5">
    <div class="col">
        <button id="onlineCourseBtn" class="btn px-4 py-2" type="button" name="button">ONLINE COURSES CATALOG</button>
    </div>

    <div class="w-25">
        <button id="contactButton" class="btn px-4 py-2 float-left" type="button " name="button">CONTACT</button>
        <button id="applyButton" class="btn btn-primary float-right px-4 py-2" type="button" name="button" href="/applicationForm">APPLY</button>
    </div>

</div>

<div class="row my-5 py-5 pl-4 ml-4">
    <div class="col w-200">
        <iframe width="672" height="378" src="https://www.youtube.com/embed/NHPCU_NuaF8">
</iframe>
    </div>
    <div class="col-md-6 text-left">
        <h1 class="text-primary">Our Online Structure</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
            irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p>View our <a class="text-primary" href="#">Online Courses Catalog</a></p>
    </div>
</div>
<div class="row my-4 py-4 px-5">
    <div class="col-md-6 text-right pl-4 ml-4">
        <h1 class="text-primary">The Experience</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
            irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p>View our <a class="text-primary" href="#">Online Courses Catalog</a></p>
    </div>
    <div class="col-md-5">
        <iframe width="672" height="378" src="https://www.youtube.com/embed/nNJYSkZEIrM">
</iframe>
    </div>
</div>

<div class="row justify-content-center py-4">
    <div class="col-md-6">
        <h1 class="text-primary text-center">12 And 24 Week Online Courses</h1>
        <h4 class="text-primary text-center">Be immersed in learning life-changing skills</h4>
    </div>

</div>

<div class="slickSlides">
    <div class="slide">
        <div class="card" style="width: 30rem;">
            <img class="card-img-top" src="images/carousel1.png" alt="Card image cap">
            <div id="slide1" class="card-body">
                <h5 class="card-title">FULL STACK DEVELOPER</h5>
                <p class="card-text">Entry, Mid, & Advanced Levels</p>
                <a href="#" class="btn btn-primary">LEARN MORE</a>
            </div>
        </div>

    </div>
    <div class="slide">
        <div class="card" style="width: 30rem;">
            <img class="card-img-top" src="images/carousel1.png" alt="Card image cap">
            <div id="slide2" class="card-body">
                <h5 class="card-title">FULL STACK DEVELOPER</h5>
                <p class="card-text">Entry, Mid, & Advanced Levels</p>
                <a href="#" class="btn btn-primary">LEARN MORE</a>
            </div>
        </div>

    </div>
    <div class="slide">
        <div class="card" style="width: 30rem;">
            <img class="card-img-top" src="images/carousel1.png" alt="Card image cap">
            <div id="slide3" class="card-body">
                <h5 class="card-title">FULL STACK DEVELOPER</h5>
                <p class="card-text">Entry, Mid, & Advanced Levels</p>
                <a href="#" class="btn btn-primary">LEARN MORE</a>
            </div>
        </div>

    </div>
    <div class="slide">
        <div class="card" style="width: 30rem;">
            <img class="card-img-top" src="images/carousel1.png" alt="Card image cap">
            <div id="slide4" class="card-body">
                <h5 class="card-title">FULL STACK DEVELOPER</h5>
                <p class="card-text">Entry, Mid, & Advanced Levels</p>
                <a href="#" class="btn btn-primary">LEARN MORE</a>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">

    </div>
</div>

<div class="row my-4 bg-primary" id="greyBand">
    <div class="col-md-6 text-center">
        <p class="greyBandText">NEXT SESSION CLASSES BEGIN JUN. 11, 2018</p>
        <button class="py-1 px-4" type="button" name="button">VIEW CATALOG</button>
    </div>
    <div class="col-md-6 text-center">
        <p class="greyBandText">FINANCIAL ASSISTANCE AVAILABLE</p>
        <button class="py-1 px-4" type="button" name="button">LEARN MORE</button>
    </div>
</div>
<div class="row justify-content-center" id="contact">
    <div class="col-md-8 text-center">
        <h2>Have a Question? Let's Talk :)</h5>
        <br>
        <h5>Please provide your contact info and we will get in touch with you about the online program.</h3>
    </div>


</div>
<div id="contactForm" class="row justify-content-center">
    <div class="col-md-4">
        <div class="input-group mb-3">
            <input type="text" class="form-control straightEdges" placeholder="Full Name" aria-label="Full Name" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control straightEdges" placeholder="Phone Number" aria-label="Phone Number" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control straightEdges" placeholder="How do you want us to get in contact?" aria-label="How do you want us to get in contact?" aria-describedby="basic-addon1">
        </div>
        <button class="btn btn-danger straightEdges" type="button" name="button">SEND</button>
    </div>
</div>


@endsection

@section('bottomjs')
<script>
$(document).ready(function(){
    $('.slickSlides').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: true,
        arrows: true
    });
});
</script>
@endsection
