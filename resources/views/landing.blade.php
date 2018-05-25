@extends('master') @section('title') Valley Technical Academy @endsection @section('body')
<div id="home" class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Fluid jumbotron</h1>
        <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
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

<div class="row my-5 py-5">
    <div class="col-6">

    </div>
    <div class="col-6 text-left pr-4">
        <h1 class="text-primary">Our Online Structure</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
</div>
<div class="row my-4 py-4 px-5">
    <div class="col-6 text-right pl-4 ml-4">
        <h1 class="text-primary">The Experience</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
    <div class="col-6">

    </div>
</div>

<div class="row justify-content-center">
    <div class="slickSlides">
        <div>your content</div>
        <div>your content</div>
        <div>your content</div>
    </div>

    <div data-slick='{"slidesToShow": 4, "slidesToScroll": 4}'>
        <div>
            <h3>1</h3></div>
        <div>
            <h3>2</h3></div>
        <div>
            <h3>3</h3></div>
        <div>
            <h3>4</h3></div>
        <div>
            <h3>5</h3></div>
        <div>
            <h3>6</h3></div>
    </div>


</div>

<div class="row my-4" id="greyBand">
    <div class="col-6 text-center">
        <p class="greyBandText">NEXT SESSION CLASSES BEGIN JUN. 11, 2018</p>
        <button class="py-1 px-4" type="button" name="button">VIEW CATALOG</button>
    </div>
    <div class="col-6 text-center">
        <p class="greyBandText">FINANCIAL ASSISTANCE AVAILABLE</p>
        <button class="py-1 px-4" type="button" name="button">LEARN MORE</button>
    </div>
</div>
<div class="row justify-content-center py-2 my-4" id="contact">
    <div class="col-8 text-center">
        <h2>Have a Question? Let's Talk :)</h5>
        <br>
        <h5>Please provide your contact info and we will get in touch with you about the online program.</h3>
    </div>

</div>

@endsection
