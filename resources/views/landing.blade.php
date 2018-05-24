@extends('master') @section('title') Valley Technical Academy @endsection @section('body')
<div id="home" class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Fluid jumbotron</h1>
        <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
    </div>
</div>

<div class="row justify-content-center">



    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <!-- <li data-target="#carouselExampleIndicators" data-slide-to="1"></li> -->
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="col-2">
                    <div class="row d-block w-30">
                        <img src="images/carousel1.png" alt="">
                    </div>
                    <div class="row">

                    </div>
                </div>
                <div class="col-2">
                    <div class="row d-block w-100">
                        <img src="images/carousel1.png" alt="">
                    </div>
                    <div class="row">

                    </div>
                </div>
                <div class="col-2">
                    <div class="row d-block w-100">
                        <img src="images/carousel1.png" alt="">
                    </div>
                    <div class="row">

                    </div>
                </div>
                <!-- <img class="d-block w-100" src="images/girl_with_hat_fluidity.jpg" alt="First slide"> -->
            </div>
            <!-- <div class="carousel-item">
                <img class="d-block w-100" src="images/girl_with_hat_fluidity.jpg" alt="Second slide">
            </div> -->

        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
    </div>
</div>

<div class="row" id="greyBand">
    <div class="col-6 text-center">
        <p class="greyBandText">NEXT SESSION CLASSES BEGIN JUN. 11, 2018</p>
        <button class="py-1 px-4" type="button" name="button">VIEW CATALOG</button>
    </div>
    <div class="col-6 text-center">
        <p class="greyBandText">FINANCIAL ASSISTANCE AVAILABLE</p>
        <button class="py-1 px-4" type="button" name="button">LEARN MORE</button>
    </div>
</div>
<div class="row" id="contact">
    <h5>Have a Question? Let's Talk :)</h5>
    <h3>Please provide your contact info and we will get in touch with you about the online program.</h3>
</div>

@endsection
