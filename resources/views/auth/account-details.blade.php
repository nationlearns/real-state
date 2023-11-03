<!doctype html>
<html lang="en">

<!-- Mirrored from uigaint.com/demo/html/anfra/login-register-1/account-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Nov 2023 04:53:16 GMT -->
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
            <!-- <img class="light-logo" src="{{asset('auth/assets/images/logo.png')}}" alt=""> -->
            <img class="" src="{{asset('auth/assets/images/logo-dark2.png')}}" alt="">
          </a>
        </div>
        <div class="container-md">
          <div class="row">
            <div class="col-lg-7 offset-lg-5 p-sm-0">
              <div class="ugf-content pt150">
                <a href="account-category.html" class="prev-page">Back to Previous</a>
                <h2>Account details</h2>
                <p>Enter some fo your information & secure password to go next step!</p>
                <form action="" class="account-form">
                  <div class="row">
                    <div class="col-sm-6 p-sm-0">
                      <div class="form-group">
                        <label for="inputFname">First Name</label>
                        <input type="text" placeholder="e.g. Jhon" class="form-control" id="inputFname">
                      </div>
                    </div>
                    <div class="col-sm-6 p-sm-0">
                      <div class="form-group">
                        <label for="inputLname">Last Name</label>
                        <input type="text" placeholder="e.g. Smith" class="form-control" id="inputLname">
                      </div>
                    </div>
                    <div class="col-md-6 p-sm-0">
                      <div class="form-group">
                        <label for="inputPhone">Phone Number</label>
                        <input type="text" placeholder="e.g. +99 123 4567 890" class="form-control" id="inputPhone">
                      </div>
                    </div>
                    <div class="col-md-6 p-sm-0">
                      <div class="form-group">
                        <label for="inputDate">Date of Birth</label>
                        <div class="birth-date">
                          <div class="select-input birth-date-input">
                            <span></span>
                            <select id="inputDate" class="form-control">
                              <option value="">Date</option>
                              <option value="">01</option>
                              <option value="">02</option>
                              <option value="">03</option>
                              <option value="">04</option>
                              <option value="">05</option>
                              <option value="">06</option>
                              <option value="">07</option>
                              <option value="">08</option>
                              <option value="">09</option>
                              <option value="">10</option>
                              <option value="">11</option>
                              <option value="">12</option>
                              <option value="">13</option>
                              <option value="">14</option>
                              <option value="">15</option>
                              <option value="">16</option>
                              <option value="">17</option>
                              <option value="">18</option>
                              <option value="">19</option>
                              <option value="">20</option>
                              <option value="">21</option>
                              <option value="">22</option>
                              <option value="">23</option>
                              <option value="">24</option>
                              <option value="">25</option>
                              <option value="">26</option>
                              <option value="">27</option>
                              <option value="">28</option>
                              <option value="">29</option>
                              <option value="">30</option>
                            </select>
                          </div>
                          <div class="select-input birth-date-input">
                            <span></span>
                            <select id="inputDate" class="form-control">
                              <option value="">Month</option>
                              <option value="">01</option>
                              <option value="">02</option>
                              <option value="">03</option>
                              <option value="">04</option>
                              <option value="">05</option>
                              <option value="">06</option>
                              <option value="">07</option>
                              <option value="">08</option>
                              <option value="">09</option>
                              <option value="">10</option>
                              <option value="">11</option>
                              <option value="">12</option>
                            </select>
                          </div>
                          <div class="select-input birth-date-input">
                            <span></span>
                            <select id="inputDate" class="form-control">
                            <option value="">Year</option>
                            <option value="">1990</option>
                            <option value="">1991</option>
                            <option value="">1992</option>
                            <option value="">1993</option>
                            <option value="">1994</option>
                            <option value="">1995</option>
                            <option value="">1996</option>
                            <option value="">1997</option>
                            <option value="">1998</option>
                            <option value="">1999</option>
                            <option value="">2001</option>
                            <option value="">2002</option>
                            <option value="">2003</option>
                            <option value="">2004</option>
                            <option value="">2005</option>
                            <option value="">2006</option>
                            <option value="">2007</option>
                            <option value="">2008</option>
                            <option value="">2009</option>
                            <option value="">2010</option>
                          </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group pass-group">
                    <label for="inputPass">Password</label>
                    <input type="password" placeholder="8+ Characters" class="form-control" id="inputPass">
                    <div class="pass-toggler-btn">
                      <i id="eye" class="lar la-eye"></i>
                      <i id="eye-slash" class="lar la-eye-slash"></i>
                    </div>
                  </div>
                  <div class="form-group check-gender">
                    <div class="custom-radio">
                      <input type="radio" name="gender" class="custom-control-input" id="Gmale" required>
                      <label class="custom-control-label" for="Gmale">Male</label>
                    </div>
                    <div class="custom-radio">
                      <input type="radio" name="gender" class="custom-control-input" id="Gfemale" required>
                      <label class="custom-control-label" for="Gfemale">Female</label>
                    </div>
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
            <p>Email verification</p>
          </div>
          <div class="step complete-step">
            <span>2</span>
            <p>Category</p>
          </div>
          <div class="step step-onprocess">
            <span>3</span>
            <p>Account Details</p>
          </div>
          <div class="step">
            <span>4</span>
            <p>Payment Details</p>
          </div>
          <div class="step">
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

<!-- Mirrored from uigaint.com/demo/html/anfra/login-register-1/account-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Nov 2023 04:53:18 GMT -->
</html>
