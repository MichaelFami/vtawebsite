@extends('master') @section('title') Online Course Catalog @endsection
@section('navbar')
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

                            <a class="nav-link" href="/fullStack">On Campus<span class="sr-only">(current)</span></a>
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
@endsection

    @section('body')
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
            <h1 id="jumbotronTitle" class="display-4 float-right text-white">Our Online Catalog:</h1>
        </div>
    </div>
    <div class="row mx-4">
        <div class="col">
            <p class="lead float-right text-white">Be immersed in learning life changing skills</p>
        </div>
    </div>
</div>
<div class="row justify-content-center my-2 ml-3">
    <div class="col">
            <button class="btn btn-danger ml-5" type="button" name="button"><h1 class="text-primary"  data-toggle="collapse" data-target="#collapseFullStack" aria-expanded="false" aria-controls="collapseFullStack">
    FULL STACK DEVELOPER
</h1></button>

        <div class="collapse my-4" id="collapseFullStack">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <img src="images/carousel1.png" alt="">
                    </div>
                    <div class="col-md-3 my-auto">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                    </div>
                    <div class="col-md-3 my-auto">
                        <div class="row">
                            <h5>DURATION: 12 WEEK | 24 WEEK</h5>
                            <br>
                            <h5>CLASSES BEGIN: JUNE 18, 2018</h5>
                        </div>
                        <div class="row mt-4">
                            <button class="btn btn-danger mx-3" type="button" name="button" href="/applicationForm">APPLY</button>
                            <button class="btn" type="button" name="button">LEARN MORE</button>
                        </div>
                    </div>
                </div>



        </div>
    </div>
</div>
<div class="row justify-content-center my-2 ml-3">
    <div class="col">
            <button class="btn ml-5" type="button" name="button"><h1 class="text-primary"  data-toggle="collapse" data-target="#collapseMobileApp" aria-expanded="false" aria-controls="collapseMobileApp">
    MOBILE APP DEVELOPER
</h1></button>


        <div class="collapse my-4" id="collapseMobileApp">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <img src="images/carousel1.png" alt="">
                    </div>
                    <div class="col-md-3 my-auto">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                    </div>
                    <div class="col-md-3 my-auto">
                        <div class="row">
                            <h5>DURATION: 12 WEEK | 24 WEEK</h5>
                            <br>
                            <h5>CLASSES BEGIN: JUNE 18, 2018</h5>
                        </div>
                        <div class="row mt-4">
                            <button class="btn btn-danger mx-3" type="button" name="button" href="/applicationForm">APPLY</button>
                            <button class="btn" type="button" name="button">LEARN MORE</button>
                        </div>
                    </div>
                </div>



        </div>
    </div>
</div>

<div class="row justify-content-center my-2 ml-3">
    <div class="col">
            <button class="btn ml-5" type="button" name="button"><h1 class="text-primary"  data-toggle="collapse" data-target="#collapseDataScience" aria-expanded="false" aria-controls="collapseDataScience">
    DATA SCIENCE
</h1></button>


        <div class="collapse my-4" id="collapseDataScience">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <img src="images/carousel1.png" alt="">
                    </div>
                    <div class="col-md-3 my-auto">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                    </div>
                    <div class="col-md-3 my-auto">
                        <div class="row">
                            <h5>DURATION: 12 WEEK | 24 WEEK</h5>
                            <br>
                            <h5>CLASSES BEGIN: JUNE 18, 2018</h5>
                        </div>
                        <div class="row">
                            <button class="btn btn-danger mx-3" type="button" name="button" href="/applicationForm">APPLY</button>
                            <button class="btn" type="button" name="button">LEARN MORE</button>
                        </div>
                    </div>
                </div>



        </div>
    </div>
</div>

<div class="row justify-content-center my-2 ml-3">
    <div class="col">
            <button class="btn ml-5" type="button" name="button"><h1 class="text-primary"  data-toggle="collapse" data-target="#collapseCyberSecurity" aria-expanded="false" aria-controls="collapseCyberSecurity">
    CYBER SECURITY
</h1></button>


        <div class="collapse my-4" id="collapseCyberSecurity">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <img src="images/carousel1.png" alt="">
                    </div>
                    <div class="col-md-3 my-auto">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                    </div>
                    <div class="col-md-3 my-auto">
                        <div class="row">
                            <h5>DURATION: 12 WEEK | 24 WEEK</h5>
                            <br>
                            <h5>CLASSES BEGIN: JUNE 18, 2018</h5>
                        </div>
                        <div class="row">
                            <button class="btn btn-danger mx-3" type="button" name="button" href="/applicationForm">APPLY</button>
                            <button class="btn" type="button" name="button">LEARN MORE</button>
                        </div>
                    </div>
                </div>



        </div>
    </div>
</div>

<div class="row justify-content-center my-2 ml-3">
    <div class="col">
            <button class="btn ml-5" type="button" name="button"><h1 class="text-primary"  data-toggle="collapse" data-target="#collapseDesign" aria-expanded="false" aria-controls="collapseDesign">
    DESIGN
</h1></button>


        <div class="collapse my-4" id="collapseDesign">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <img src="images/carousel1.png" alt="">
                    </div>
                    <div class="col-md-3 my-auto">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                    </div>
                    <div class="col-md-3 my-auto">
                        <div class="row">
                            <h5>DURATION: 12 WEEK | 24 WEEK</h5>
                            <br>
                            <h5>CLASSES BEGIN: JUNE 18, 2018</h5>
                        </div>
                        <div class="row">
                            <button class="btn btn-danger mx-3" type="button" name="button" href="/applicationForm">APPLY</button>
                            <button class="btn" type="button" name="button">LEARN MORE</button>
                        </div>
                    </div>
                </div>



        </div>
    </div>
</div>
<div class="row my-4 bg-primary" id="greyBand">
    <div class="col-md-6 text-center">
        <p class="greyBandText">OUR ADMISSION PRICE</p>
        <button class="py-1 px-4" type="button" name="button">LEARN MORE</button>
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
        <button class="btn straightEdges" type="button" name="button">SEND</button>
    </div>
</div>

@endsection @section('bottomjs') @endsection
