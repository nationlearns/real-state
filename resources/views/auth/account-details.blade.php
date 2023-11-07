<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Account-Details</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('auth/assets/css/bootstrap.min.css')}}">

    <!-- External Css -->
    <link rel="stylesheet" href="{{asset('auth/assets/css/line-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('auth/assets/css/owl.carousel.min.css')}}" />

    <!-- Custom Css -->
    <link rel="stylesheet" type="text/css" href="{{asset('auth/assets/css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('auth/assets/css/theme-1.css')}}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet">

    <link rel="icon" href="{{asset('auth/assets/images/favicon.png')}}">
    <link rel="apple-touch-icon" href="{{asset('auth/assets/images/apple-touch-icon.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('auth/assets/images/icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('auth/assets/images/icon-114x114.png')}}">


  </head>
  <body>

    <div class="ugf-wrapper flat-grey-bg">
      <div class="ugf-content-block">
        <div class="logo">
          <a href="https://uigaint.com/demo/html/anfra/index.html">
            <!-- <img class="light-logo" src="{{asset('auth/assets/images/logo.png')}}" alt=""> -->
            <img class="" src="{{asset('auth/assets/images/logo-dark2.png')}}" alt="">
          </a>
        </div>
        <div class="container-md">
          <div class="row">
            <div class="col-lg-7 offset-lg-5 p-sm-0">
              <div class="ugf-content pt150">
                 <!-- <a href="account-category.html" class="prev-page">Back to Previous</a> -->
                <h2>Account details</h2>
                <p>Enter some fo your information & secure password to go next step!</p>
                <form action="payment.html" class="account-form">
                  <div class="row">
                    <!-- <div class="col-sm-6 p-sm-0">
                      <div class="form-group">
                        <label for="inputFname">Company Name</label>
                        <input type="text" placeholder="e.g. Jhon" class="form-control" id="inputFname">
                      </div>
                    </div>
                    <div class="col-sm-6 p-sm-0">
                      <div class="form-group">
                        <label for="inputLname">Authorized Person Name</label>
                        <input type="text" placeholder="e.g. Smith" class="form-control" id="inputLname">
                      </div>
                    </div> -->
                    <div class="col-md-12 p-sm-0">
                      <div class="form-group">
                        <label for="inputPhone">Email Address </label>
                        <input type="email" placeholder="example@gmail.com" class="form-control" id="inputPhone">
                      </div>
                    </div>
                  </div>
                  <div class="form-group pass-group">
                    <label for="inputPass">Password</label>
                    <input type="password" placeholder="Enter Your Password" class="form-control" id="inputPass">
                  </div>
                  <button class="btn"><span>Next Step</span> <i class="las la-arrow-right"></i></button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="ugf-sidebar flex-bottom ugf-sidebar-bg-4 sidebar-steps">
      <div class="steps">
          <div class="step complete-step">
            <span>1</span>
            <p>Register</p>
          </div>
          <div class="step complete-step">
            <span>2</span>
            <p>Verification</p>
          </div>
          <div class="step step-onprocess">
            <span>3</span>
            <p>Basic Details</p>
          </div>
          <div class="step">
            <span>4</span>
            <p>Property Details</p>
          </div>
          <div class="step">
            <span>5</span>
            <p>Additional Details</p>
          </div>
          <div class="step">
            <span>6</span>
            <p>Terms and Conditions</p>
          </div>
        </div>
      </div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js')}}, then Bootstrap JS -->
    <script src="{{asset('auth/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('auth/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('auth/assets/js/bootstrap.min.js')}}"></script>

    <script src="{{asset('auth/assets/js/owl.carousel.min.js')}}"></script>

    <script src="{{asset('auth/assets/js/custom.js')}}"></script>
  </body>

<!-- Mirrored from uigaint.com/demo/html/anfra/login-register-1/account-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Nov 2023 04:53:18 GMT -->
</html>
