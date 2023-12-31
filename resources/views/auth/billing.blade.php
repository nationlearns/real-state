<!doctype html>
<html lang="en">

<!-- Mirrored from uigaint.com/demo/html/anfra/login-register-1/billing.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Nov 2023 04:51:48 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Template</title>

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



    <!-- Favicon -->
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
            <img class="" src="{{asset('auth/assets/images/logo-dark2.png')}}" alt="">
          </a>
        </div>
        <div class="container-md">
          <div class="row">
            <div class="col-lg-7 offset-lg-5 p-sm-0">
              <div class="ugf-content pt150">
                <a href="payment.html" class="prev-page">Back to Previous</a>
                <h2>Billing Address</h2>
                <p>Enter payment information to go next step, Don’t worry it’s optional & skip able !</p>
                <form action="" class="account-form">
                  <div class="row">
                    <div class="col-sm-6 p-sm-0">
                      <div class="form-group country-select">
                        <label for="inputCountry">Country</label>
                        <div class="select-input choose-country">
                          <span></span>
                            <select id="inputCountry" class="form-control">
                              <option value="">Country</option>
                              <option value="">USA</option>
                              <option value="">Russia</option>
                              <option value="">China</option>
                              <option value="">England</option>
                              <option value="">France</option>
                              <option value="">Germany</option>
                              <option value="">Spain</option>
                              <option value="">Netherland</option>
                              <option value="">Singapur</option>
                            </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 p-sm-0">
                      <div class="form-group">
                        <label for="inputCity">City</label>
                        <input type="text" placeholder="e.g. New York" class="form-control" id="inputCity">
                      </div>
                    </div>
                    <div class="col-sm-6 p-sm-0">
                      <div class="form-group">
                        <label for="inputAddress2">Address Line 1</label>
                        <input type="text" placeholder="e.g. 2707 Par Drive" class="form-control" id="inputAddress2">
                      </div>
                    </div>
                    <div class="col-sm-6 p-sm-0">
                      <div class="form-group">
                        <label for="inputAddress2">Address Line 2</label>
                        <input type="text" placeholder="e.g. Los Angeles, CA 90013" class="form-control" id="inputAddress2">
                      </div>
                    </div>
                    <div class="col-sm-6 p-sm-0">
                      <div class="form-group">
                        <label for="inputzipcode">Postal Code</label>
                        <input type="text" placeholder="e.g. 0000" class="form-control" id="inputzipcode">
                      </div>
                    </div>
                    <div class="col-sm-6 p-sm-0">
                      <div class="form-group">
                        <label for="inputPhone">Phone Number</label>
                        <input type="text" placeholder="E.g. 000 0000 0000" class="form-control" id="inputPhone">
                      </div>
                    </div>
                  </div>
                  <div class="form-group check-flex mb10">
                    <div class="custom-checkbox mb10">
                      <input type="checkbox" class="custom-control-input" id="inputCheck" required>
                      <label class="custom-control-label" for="inputCheck">I accept the <a href="#">Term of Conditions</a> and <a href="#">Privacy Policy</a></label>
                    </div>
                  </div>
                  <button class="btn"><span>Complete</span> <i class="las la-check"></i></button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="ugf-sidebar flex-bottom ugf-sidebar-bg-6 sidebar-steps">
        <div class="steps">
          <div class="step complete-step">
            <span>1</span>
            <p>Email verification</p>
          </div>
          <div class="step complete-step">
            <span>2</span>
            <p>Category</p>
          </div>
          <div class="step complete-step">
            <span>3</span>
            <p>Account Details</p>
          </div>
          <div class="step complete-step">
            <span>4</span>
            <p>Payment Details</p>
          </div>
          <div class="step step-onprocess">
            <span>5</span>
            <p>Billing Details</p>
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

<!-- Mirrored from uigaint.com/demo/html/anfra/login-register-1/billing.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Nov 2023 04:52:16 GMT -->
</html>
