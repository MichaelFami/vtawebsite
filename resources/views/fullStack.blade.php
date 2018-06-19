@extends('master') @section('title') Full Stack Developer @endsection
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
                        <li class="nav-item">
                            <a class="nav-link" href="/courseCatalog">Online</a>
                        </li>
                        <span class="navbar-slash">/</span>
                        <li class="nav-item active">

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
            <a class="text-white" href="/courseCatalog">ONLINE COURSES</a>
        </div>
    </div>
    <div class="row mx-4">
        <div class="col">
            <h1 id="jumbotronTitle" class="display-4 float-right text-white">Full Stack Developer:</h1>
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
        <button id="onlineCourseBtn" class="btn px-4 py-2" type="button" name="button" href="/courseCatalog">ONLINE COURSES CATALOG</button>
    </div>

    <div class="w-25">
        <button id="contactButton" class="btn px-4 py-2 float-left" type="button " name="button">CONTACT</button>
        <a href="/applicationForm"><button id="applyButton" class="btn btn-primary float-right px-4 py-2" type="button" name="button">APPLY</button></a>

    </div>

</div>

<div class="row justify-content-center py-4">
    <div class="col-md-6">
        <h1 class="text-primary text-center">Full Stack Developer</h1>

    </div>

</div>
<div class="row justify-content-center" id="myGroup">
    <div class="col-md-4">
        <div class="row">
            <div class="col">
                <h5 id="buttonOverview" class="ml-5" data-toggle="collapse" data-target="#collapseOverview" aria-expanded="true" aria-controls="collapseOverview" data-parent="#myGroup">
            Overview
        </h5>
                <hr class="text-primary">
                <h5 class="ml-5" data-toggle="collapse" data-target="#collapseProgram" aria-expanded="false" aria-controls="collapseProgram" data-parent="#myGroup">
    Program Topics
</h5>
                <hr class="text-primary">
                <h5 class="ml-5" data-toggle="collapse" data-target="#collapseDynamics" aria-expanded="false" aria-controls="collapseDynamics" data-parent="#myGroup">
Dynamics
</h5>
                <hr class="text-primary">
                <h5 class="ml-5" data-toggle="collapse" data-target="#collapseFees" aria-expanded="false" aria-controls="collapseFees" data-parent="#myGroup">
Fees and Application
</h5>
                <hr class="text-primary">
                <h5 class="ml-5" data-toggle="collapse" data-target="#collapseCertificate" aria-expanded="false" aria-controls="collapseCertificate" data-parent="#myGroup">
Certificate of completion
</h5>


            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <button  class="btn py-2 px-5" type="button " name="button">CONTACT US</button>
                <a href="/applicationForm"><button id="applyButton" class="btn btn-primary py-2" type="button" name="button"  >APPLY & GET STARTED</button></a>


            </div>
        </div>

    </div>
    <div class="col-md-4">
        <div class="collapse my-4" id="collapseOverview">
            <div class="row justify-content-center">

                <div class="col-md-12 my-auto">
                    The doors to frontend and backend development are totally open to you in our Fullstack Web Development pathway. This program is for absolute beginners. Everybody will get their start with HTML/CSS and Javascript in the first weeks. You’ll then be introduced to NodeJS and React as part of the curriculum.
                </div>

            </div>



        </div>
        <div class="collapse my-4" id="collapseProgram">
            <div class="row justify-content-center">

                <div class="col-md-12 my-auto">
                    Program pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                </div>

            </div>



        </div>
        <div class="collapse my-4" id="collapseDynamics">
            <div class="row justify-content-center">

                <div class="col-md-12 my-auto">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                </div>

            </div>



        </div>
        <div class="collapse my-4" id="collapseFees">
            <div class="row justify-content-center">

                <div class="col-md-12 my-auto">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                </div>

            </div>



        </div>
        <div class="collapse my-4" id="collapseCertificate">
            <div class="row justify-content-center">
                <div class="col-md-12 my-auto">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row" id="twoButtons">
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
            <button class="btn straightEdges" type="button" name="button">SEND</button>
        </div>
    </div>
@endsection
@section('bottomjs')

<script type="text/javascript">

// var $myGroup = $('#myGroup');
// $myGroup.on('show.bs.collapse','.collapse', function() {
//     $myGroup.find('.collapse.in').collapse('hide');
//     console.log("This ran!");
// });

var $myGroup = $('#myGroup');
$myGroup.on('show.bs.collapse','.collapse', function() {
$myGroup.find('.collapse.show').collapse('hide');
});


// $("#buttonOverview").click(function(){
//     $("#collapseOverview").show();
//     $("collapseProgram").hide();
// });

</script>
@endsection
