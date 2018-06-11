@extends('master')
@section('title')
    Full Stack Developer
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
            <button id="onlineCourseBtn" class="btn px-4 py-2" type="button" name="button">ONLINE COURSES CATALOG</button>
        </div>

        <div class="w-25">
            <button id="contactButton" class="btn px-4 py-2 float-left" type="button " name="button">CONTACT</button>
            <button id="applyButton" class="btn btn-primary float-right px-4 py-2" type="button" name="button">APPLY</button>
        </div>

    </div>

    <div class="row justify-content-center py-4">
        <div class="col-md-6">
            <h1 class="text-primary text-center">Full Stack Developer</h1>

        </div>

    </div>
    <div class="row justify-content-center">
        <div class="col-md-4">
            <button id="contactButton" class="btn py-2" type="button " name="button">CONTACT US</button>
            <button id="applyButton" class="btn btn-primary py-2" type="button" name="button">APPLY & GET STARTED</button>
        </div>
        <div class="col-md-4">

        </div>
    </div>

    <div class="row my-4" id="greyBand">
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

@endsection
