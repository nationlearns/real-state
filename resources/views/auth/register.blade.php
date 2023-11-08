<!doctype html>
<html lang="en">

<!-- Mirrored from uigaint.com/demo/html/anfra/login-register-1/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Nov 2023 04:04:42 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Property- Register</title>
    <link rel="stylesheet" href="{{asset('auth/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('auth/assets/css/line-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('auth/assets/css/owl.carousel.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('auth/assets/css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('auth/assets/css/theme-1.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet">

    <link rel="icon" href="{{asset('auth/assets/images/favicon.png')}}">
    <link rel="apple-touch-icon" href="{{asset('auth/assets/images/apple-touch-icon.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('auth/assets/images/icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('auth/assets/images/icon-114x114.png')}}">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
.button{
  appearance: none;
  background-color: transparent;
  border: 2px solid #1A1A1A;
  border-radius: 15px;
  box-sizing: border-box;
  color: #3B3B3B;
  cursor: pointer;
  display: inline-block;
  font-family: Roobert,-apple-system,BlinkMacSystemFont,"Segoe UI",Helvetica,Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
  font-size: 16px;
  font-weight: 600;
  line-height: normal;
  margin: 0;
  min-height: 60px;
  min-width: 0;
  outline: none;
  padding: 16px 24px;
  text-align: center;
  text-decoration: none;
  transition: all 300ms cubic-bezier(.23, 1, 0.32, 1);
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  width: 100%;
  will-change: transform;
}

.button:disabled {
  pointer-events: none;
}

.button:hover {
  color: #fff;
  background-color: #1A1A1A;
  box-shadow: rgba(0, 0, 0, 0.25) 0 8px 15px;
  transform: translateY(-2px);
}

.button:active {
  box-shadow: none;
  transform: translateY(0);
}
.label{
  font-size: 13px;
  padding: 5px 0px;
  font-weight: 600;
}
.modal-button{
  padding: 15px 0px;
  font-size: 13px;
  font-weight: 600;
}
.modal-button:hover {
  color: #fff;
  background-color: #1A1A1A;
  box-shadow: rgba(0, 0, 0, 0.25) 0 8px 15px;
  transform: translateY(-2px);
  font-weight: 600;

}
.modal-button:disabled {
  pointer-events: none;
}

.field-icon {
  float: right;
  margin-right: 10px;
  margin-top: -30px;
  position: relative;
  z-index: 2;
  font-size: 18px;
}

.container{
  padding-top:50px;
  margin: auto;
}
.form-control{
  line-height: 3.5;
}
</style>
  </head>
  <body>
    <div class="ugf-wrapper theme-bg">
      <div class="ugf-content-block">
        <div class="logo">
          <a href="">
            <!-- <img class="light-logo" src="{{asset('auth/assets/images/logo.png')}}" alt="logo"> -->
            <!-- <img class="dark-logo" src="{{asset('auth/assets/images/logo-dark2.png')}}" alt="logo"> -->
          </a>
        </div>
        <div class="container-md">
          <div class="row">
            <div class="col-lg-7 offset-lg-5 p-sm-0">
              <div class="ugf-content pt150">
                <h2>Register</h2>
                <h3>Please complete the following registration form to showcase your properties and projects at the Virtual Property Expo 2023. </h3>
                <h4>Your participation in this event will connect you with a global audience of potential buyers and investors.</h4>
                <h4 class="success" style="color:red" id="success1"></h4>
                   <div class="form-group">
                    <label class="label">Name</label>
                    <input type="mobile" placeholder="Name" class="form-control" id="inputName"  required>
                  </div>
                  <div class="form-group">
                    <label class="label">Email</label>
                    <input  type="name" placeholder="Enter Your Email" class="form-control" id="inputEmail" required>
                  </div>
                  <div class="form-group">
                    <label class="label">Password</label>
                    <input id="password-field" type="password" class="form-control" name="password" placeholder="Password">
                    <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                  </div>
                  <div class="form-group">
                    <label class="label">Mobile</label>
                    <input type="name" placeholder="+91" class="form-control" id="inputMobile" maxlength="10" required>
                  </div>
                  <button id="openModalBtn" class="modal-button" data-toggle="modal" data-target="#myModal">Validate To Continue<i class="las la-arrow-right"></i></button>
                  <!-- <button class="button" id="registerUser" disabled>Register</button> -->
              </div>
            </div>
          </div>

        <div class="alternet-access">
          <p>Already have an account? <a href="{{url('user-login')}}">&nbsp; Log in now!</a></p>
        </div>
      </div>
      <div class="ugf-sidebar flex-bottom ugf-sidebar-bg-3 sidebar-steps">
        <div class="steps">
          <div class="step step-onprocess">
            <span>1</span>
            <p>Register</p>
          </div>
          <div class="step">
            <span>2</span>
            <p>Verification</p>
          </div>
          <div class="step">
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

</body>
</html>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js')}}, then Bootstrap JS -->
    <script src="{{asset('auth/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('auth/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('auth/assets/js/bootstrap.min.js')}}"></script>

    <script src="{{asset('auth/assets/js/owl.carousel.min.js')}}"></script>

    <script src="{{asset('auth/assets/js/custom.js')}}"></script>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog"  aria-hidden="true" style="margin-top:71px; overflow:hidden; position: fixed;" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
				<div class="modal-header" style="padding: 0.25rem 1rem !important;">
					<button type="button" class="close" id="closeButton" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
            <div class="modal-body">
				<p class="error" style="color:red" id="error"> </p>
					<div class="container otp height-100 d-flex justify-content-center align-items-center"> 
						<div class="position-relative"> 
							<div class="card p-2 text-center" id="validateOtp"> 
								<h4 class="success" style="color:green" id="success1"></h4>
								<h4>Please enter the one time password <br> to verify your account</h4> 
									<div><span>A code has been sent to</span> 
										<small id="mobileNumber"></small> 
									</div> 
									<div id="otp" class="inputs d-flex flex-row justify-content-center mt-2"> 
										<input class="m-2 text-center form-control rounded" type="text" id="inputOtp" maxlength="6" /> 
										
									</div> 
									<button class="btn" id="edit_mobile">Edit Mobile</button>
									<div class="mt-4" style="display:inline"> 
										<button type="button" class="btn btn-success" id="ResendOtp">Resend OTP</button>
										<button class="btn btn-danger px-4 validate" id="validate">Validate</button> 
									</div> 
								</div>
								<div class="card p-2 text-center" style="display: none;" id="validateSuccess">
									<p style="color: green;">OTP Validate Success</p>
								</div>
								</div>
							</div>
						</div>
					</div>
</div>
				
        </div>
			</div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script>
  jQuery("#openModalBtn").click(function () {
        var mobile = $("#inputMobile").val();
        var name= $("#inputName").val();
        var email= $("#inputEmail").val();
        var password= $("#password-field").val();

		if(mobile != '' || name != '' || email != '' || password  != ''){
			$.ajax({
				url: "/api/request-otp",
				type: 'POST',
				data: { mobileNumber: mobile },
				success: function (res) {
					if (res) {
            $('#mobileNumber').text(mobile);
						$("#myModal").modal("show");
					} else {
						$("#myModal").modal("hide");
					}
				}
			});
    }else{
      $("#success1").text('Please Enter All Details');
			setTimeout(function() {
						$("#success1").text('');
			}, 5000);
    }
    });

    $(document).ready(function() {
		$('#closeButton').click(function() {
			if (confirm("Are you sure that you want to leave?")) {
			$('#myModal').modal('hide');
			}
		});
		});

		$(document).ready(function () {
        $('#myModal').modal({
            backdrop: 'static',
            keyboard: false
        });
    });

    $('#validate').click(function () {
	 let otp = 	$('#inputOtp').val();
   var mobile = $("#inputMobile").val();
	 const start = Date.now();
   var name= $("#inputName").val();
   var email= $("#inputEmail").val();
  var password= $("#password-field").val();
		$.ajax({
            url: "/api/verify-otp",
            type: 'POST',
            data: { otp: otp,otp_time :start,mobile:mobile},
            success: function (res) {
                if (res.error != '') {
					      $("#error").text(res.error);
					        setTimeout(function() {
						      $("#error").text('');
					        }, 5000);
                } else {
					        $.ajax({
				          url: "/api/create-user",
				          type: 'POST',
				          data: { mobile: mobile , name:name, email :email,password:password },
				        success: function (res) {
					      if (res.error != '') {
                 $("#success1").text(res.error);
                  setTimeout(function() {
						      $("#success1").text('');
			            }, 5000);
					      }else{
                 window.location = "{{url('/account-details')}}"
                }
				      }
			});
                 }
            }
        });
	});

  jQuery("#registerUser").click(function () {
        var mobile = $("#inputMobile").val();
        var name= $("#inputName").val();
        
		if(mobile != '' || name != ''){
			$.ajax({
				url: "/api/create-user",
				type: 'POST',
				data: { mobile: mobile , name:name},
				success: function (res) {
					if (res.error != '') {
            $("#success1").text(res.error);
            setTimeout(function() {
						$("#success1").text('');
			      }, 5000);
					}else{
            window.location = "{{url('/account-details')}}"
          }
				}
			});
    }else{
      $("#success1").text('Please Enter All Details');
			setTimeout(function() {
						$("#success1").text('');
			}, 5000);
    }
    });


$(".toggle-password").click(function() {
$(this).toggleClass("fa-eye fa-eye-slash");
var input = $($(this).attr("toggle"));
if (input.attr("type") == "password") {
  input.attr("type", "text");
} else {
  input.attr("type", "password");
}
});
</script>

