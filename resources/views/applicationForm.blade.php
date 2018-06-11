@extends('master') @section('title') Application Form @endsection @section('body')
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
            <h1 id="jumbotronTitle" class="display-4 float-right text-white">APPLICATION FORM:</h1>
        </div>
    </div>
</div>
<div class="row justify-content-center py-4">
    <div class="col-md-6">
        <h1 class="text-primary text-center">Let's start Your Application Process</h1>
        <br>
        <h5 class="text-primary text-center">This is the first step to improve your professional skills and change your career.</h5>
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-md-5">

        <fieldset class="form-group">
            <div class="row">

                <div class="col-sm-10">
                    <legend class="col-form-label">IS THIS YOUR FIRST COURSE AT VALLEY TECH?</legend>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                        <label class="form-check-label" for="gridRadios1">
            YES, it's my first course.
          </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                        <label class="form-check-label" for="gridRadios2">
            NO, I'm returning to Valley Tech to continue my education.
          </label>
                    </div>
                </div>
            </div>
        </fieldset>
        <hr class="text-primary"></hr>
        <fieldset class="form-group">
            <div class="form-row">


                <div class="form-group col-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                        <label class="form-check-label" for="gridRadios1">
                ONLINE PROGRAM
              </label>
                    </div>
                </div>

                <div class="form-group col-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                        <label class="form-check-label" for="gridRadios2">
                ON CAMPUS PROGRAM
              </label>
                    </div>
                </div>


            </div>
            <hr class="text-primary"></hr>


            <form>

                <div class="form-group">
                    <label for="inputAddress">FULL NAME</label>
                    <input type="text" class="form-control" id="inputFullName" placeholder="First Name | Last Name">
                </div>
                <div class="form-group">
                    <label for="inputEmail4">EMAIL</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="inputPassword4">PHONE NUMBER</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="Phone Number">
                </div>

                <div class="form-group">
                    <label for="inputAddress">ADDRESS (Line 1)</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Street Address">
                </div>
                <div class="form-group">
                    <label for="inputAddress2">ADDRESS (Line 2)</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apt | Suite | Bldg">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label for="inputZip">Zip</label>
                        <input type="text" class="form-control" id="inputZip">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputCity">City</label>
                        <input type="text" class="form-control" id="inputCity">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState">State</label>
                        <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
                    </div>

                </div>


            </form>
            <hr class="text-primary"></hr>

            <form>
                <legend class="col-form-label">CHOOSE YOUR CAREER PATH:</legend>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1">If you're not sure about which course to take, select this field and the Valey Tech team will help you find your career path.</label>
                </div>
                <div class="form-group">
                    <label for="inputState">COURSE</label>
                    <select id="inputState" class="form-control">
    <option selected>Choose...</option>
    <option>...</option>
  </select>
                </div>
                <div class="form-row">


                    <div class="form-group col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                            <label class="form-check-label" for="gridRadios1">
                    12 Week Format
                  </label>
                        </div>
                    </div>

                    <div class="form-group col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                            <label class="form-check-label" for="gridRadios2">
                    24 Week Format
                  </label>
                        </div>
                    </div>


                </div>

            </form>

            <hr class="text-primary"></hr>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">I am 13 years old or older.</label>
            </div>
            <p class="col-form-label">By sending the application form you agree to be contacted by Valley Tech Academy about applicaiton process, course information, program content and you agree with the Academy's Terms of Service and Privacy Policy.</p>
            <div class="form-row justify-content-end">
                <button type="submit" class="btn btn-primary ">APPLY</button>
            </div>

    </div>




    <div class="col-md-5">
        <p>Whether you’re exploring or ready to apply, you’ve come to the right place.
            <br>
            <br> Fill out this application to:
            <br> Receive a course syllabus
            <br> Get in touch with an admissions counselor
        </p>

        <h4 class="text-primary">Step One: Apply</h4>
        <p>We’ll review your application and get in touch with you right away</p>
        <h4 class="text-primary">Step Two: Interview</h4>
        <p>This may be conducted on the phone or in person–totally up to you! We want to get you on the best career path for you.</p>
        <h4 class="text-primary">Step Three: Aptitude Test</h4>
        <p>Aside from the interview, this test gives us more insight into how you think and where you’re best suited to learn. Of course, the final decision is up to you where you want to take your career path.</p>

        <h5 class="text-primary">LIST OF REQUIREMENTS</h5>
        <ol>
            <li>Age 17+</li>
            <li>GED or HS Diploma</li>
            <li>Aptitude Test</li>
            <li>Registration Forms</li>
        </ol>

        <h5 class="text-primary">QUESTIONS?</h5>
        <p class="text-primary">Get in contact and ask us</p>
        <p>956 335 3500</p>

        <p class="text-primary">Or send us your contact info and we will reach out to you:</p>
        <form>

            <div class="form-group">

                <input type="text" class="form-control" id="inputFullName" placeholder="First Name | Last Name">
            </div>
            <div class="form-group">

                <input type="password" class="form-control" id="inputPassword4" placeholder="Phone Number">
            </div>
            <div class="form-group">

                <select id="inputState" class="form-control">
    <option selected>How do you want us to get in contact?</option>
    <option>...</option>
  </select>
            </div>
            <div class="form-row justify-content-end">
                <button type="submit" class="btn btn-primary ">SEND</button>
            </div>
    </div>


    </form>
</div>
</div>



@endsection @section('bottomjs') @endsection
