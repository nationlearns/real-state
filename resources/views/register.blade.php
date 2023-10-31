<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link href="{{ ('assets/css/login.css') }}" rel="stylesheet">
  <!-- Design by foolishdeveloper.com -->
    <title>Glassmorphism login Form Tutorial in html css</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <style media="screen">
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color: #080710;
}
.background{
    width: 430px;
    height: 520px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
}
.background .shape{
    height: 200px;
    width: 200px;
    position: absolute;
    border-radius: 50%;
}
.shape:first-child{
    background: linear-gradient(
        #1845ad,
        #23a2f6
    );
    left: -80px;
    top: -80px;
}
.shape:last-child{
    background: linear-gradient(
        to right,
        #ff512f,
        #f09819
    );
    right: -30px;
    bottom: -80px;
}
form{
    height: 520px;
    width: 400px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
}
form *{
    font-family: 'Poppins',sans-serif;
    color: #ffffff;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
}

label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
}
input{
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    color: #e5e5e5;
}
button{
    margin-top: 50px;
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}
.social{
  margin-top: 30px;
  display: flex;
}
.social div{
  background: red;
  width: 150px;
  border-radius: 3px;
  padding: 5px 10px 10px 5px;
  background-color: rgba(255,255,255,0.27);
  color: #eaf0fb;
  text-align: center;
}
.social div:hover{
  background-color: rgba(255,255,255,0.47);
}
.social .fb{
  margin-left: 25px;
}
.social i{
  margin-right: 4px;
}

a{
    text-decoration: none;
}
    </style>
>>>>>>>> 12cfdd784300365bb88f73f0e75f3968afc8487b:resources/views/login.blade.php
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form>
        <h3>Login Here</h3>

        <label for="username">Username</label>
        <input type="text" placeholder="Email or Phone" id="username">

        <label for="password">Password</label>
        <input type="password" placeholder="Password" id="password">

        <button>Log In</button>
        <div class="social">
          <div class="go"><i class="fab fa-google"></i>  Google</div>
          <div class="fb"><a href="{{url('auth-register')}}"><i class="fa fa-user-circle"></i>  Register</a></div>
        </div>
    </form>
</body>
=======
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Multistep form</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    @import url("https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap");
* {
    margin: 0;
    padding: 0;
    outline: none;
    font-family: "Poppins", sans-serif;
}
:root {
    --primary: #333;
    --secondary: #333;
    --errorColor: red;
    --stepNumber: 6;
    --containerWidth: 600px;
    --bgColor: #333;
    --inputBorderColor: lightgray;
}

body {
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    overflow-x: hidden;
    background: var(--bgColor);
}
::selection {
    color: #fff;
    background: var(--primary);
}
.container {
    width: var(--containerWidth);
    background: #fff;
    text-align: center;
    border-radius: 5px;
    padding: 50px 35px 10px 35px;
}
.container header {
    font-size: 35px;
    font-weight: 600;
    margin: 0 0 30px 0;
}
.container .form-outer {
    width: 100%;
    overflow: hidden;
}
.container .form-outer form {
    display: flex;
    width: calc(100% * var(--stepNumber));
}
.form-outer form .page {
    width: calc(100% / var(--stepNumber));
    transition: margin-left 0.3s ease-in-out;
}
.form-outer form .page .title {
    text-align: left;
    font-size: 25px;
    font-weight: 500;
}
.form-outer form .page .field {
    width: var(--containerWidth);
    height: 45px;
    margin: 45px 0;
    display: flex;
    position: relative;
}
form .page .field .label {
    position: absolute;
    top: -30px;
    font-weight: 500;
}
form .page .field input {
    box-sizing: border-box;
    height: 100%;
    width: 100%;
    border: 1px solid var(--inputBorderColor);
    border-radius: 5px;
    padding-left: 15px;
    margin: 0 1px;
    font-size: 18px;
    transition: border-color 150ms ease;
}
form .page .field input.invalid-input {
    border-color: var(--errorColor);
}
form .page .field select {
    width: 100%;
    padding-left: 10px;
    font-size: 17px;
    font-weight: 500;
}
form .page .field button {
    width: 100%;
    height: calc(100% + 5px);
    border: none;
    background: var(--secondary);
    margin-top: -20px;
    border-radius: 5px;
    color: #fff;
    cursor: pointer;
    font-size: 18px;
    font-weight: 500;
    letter-spacing: 1px;
    text-transform: uppercase;
    transition: 0.5s ease;
}
form .page .field button:hover {
    background: #000;
}
form .page .btns button {
    margin-top: -20px !important;
}
form .page .btns button.prev {
    margin-right: 3px;
    font-size: 17px;
}
form .page .btns button.next {
    margin-left: 3px;
}
.container .progress-bar {
    display: flex;
    margin: 40px 0;
    user-select: none;
}
.container .progress-bar .step {
    text-align: center;
    width: 100%;
    position: relative;
}
.container .progress-bar .step p {
    font-weight: 500;
    font-size: 18px;
    color: #000;
    margin-bottom: 8px;
}
.progress-bar .step .bullet {
    height: 25px;
    width: 25px;
    border: 2px solid #000;
    display: inline-block;
    border-radius: 50%;
    position: relative;
    transition: 0.2s;
    font-weight: 500;
    font-size: 17px;
    line-height: 25px;
}
.progress-bar .step .bullet.active {
    border-color: var(--primary);
    background: var(--primary);
}
.progress-bar .step .bullet span {
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
}
.progress-bar .step .bullet.active span {
    display: none;
}
.progress-bar .step .bullet:before,
.progress-bar .step .bullet:after {
    position: absolute;
    content: "";
    bottom: 11px;
    right: -51px;
    height: 3px;
    width: 44px;
    background: #262626;
}
.progress-bar .step .bullet.active:after {
    background: var(--primary);
    transform: scaleX(0);
    transform-origin: left;
    animation: animate 0.3s linear forwards;
}
@keyframes animate {
    100% {
        transform: scaleX(1);
    }
}
.progress-bar .step:last-child .bullet:before,
.progress-bar .step:last-child .bullet:after {
    display: none;
}
.progress-bar .step p.active {
    color: var(--primary);
    transition: 0.2s linear;
}
.progress-bar .step .check {
    position: absolute;
    left: 50%;
    top: 70%;
    font-size: 15px;
    transform: translate(-50%, -50%);
    display: none;
}
.progress-bar .step .check.active {
    display: block;
    color: #fff;
}

@media screen and (max-width: 660px) {
    :root {
        --containerWidth: 400px;
    }
    .progress-bar .step p {
        display: none;
    }
    .progress-bar .step .bullet::after,
    .progress-bar .step .bullet::before {
        display: none;
    }
    .progress-bar .step .bullet {
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .progress-bar .step .check {
        position: absolute;
        left: 50%;
        top: 50%;
        font-size: 15px;
        transform: translate(-50%, -50%);
        display: none;
    }
    .step {
        display: flex;
        align-items: center;
        justify-content: center;
    }
}
@media screen and (max-width: 490px) {
    :root {
        --containerWidth: 100%;
    }
    .container {
        box-sizing: border-box;
        border-radius: 0;
    }
}

</style>
</head>
  <body>
        <div class="container">
            <header>Signup Form</header>
            <div class="progress-bar">
                <div class="step">
                    <p>Name</p>
                    <div class="bullet">
                        <span>1</span>
                    </div>
                    <div class="check fas fa-check"></div>
                </div>
                <div class="step">
                    <p>Contact</p>
                    <div class="bullet">
                        <span>2</span>
                    </div>
                    <div class="check fas fa-check"></div>
                </div>
                <div class="step">
                    <p>Birth</p>
                    <div class="bullet">
                        <span>3</span>
                    </div>
                    <div class="check fas fa-check"></div>
                </div>
                <div class="step">
                    <p>Submit</p>
                    <div class="bullet">
                        <span>6</span>
                    </div>
                    <div class="check fas fa-check"></div>
                </div>
            </div>
            <div class="form-outer">
                <form action="#">
                    <div class="page slide-page">
                        <div class="title">Basic Info:</div>
                        <div class="field">
                            <div class="label">First Name</div>
                            <input type="text" required />
                        </div>
                        <div class="field">
                            <div class="label">Last Name</div>
                            <input type="text" required />
                        </div>
                        <div class="field">
                            <button class="firstNext next">Next</button>
                        </div>
                    </div>

                    <div class="page">
                        <div class="title">Contact Info:</div>
                        <div class="field">
                            <div class="label">Email Address</div>
                            <input type="text" required />
                        </div>
                        <div class="field">
                            <div class="label">Phone Number</div>
                            <input type="Number" required />
                        </div>
                        <div class="field btns">
                            <button class="prev-1 prev">Previous</button>
                            <button class="next-1 next">Next</button>
                        </div>
                    </div>
                    <div class="page">
                        <div class="title">Date of Birth:</div>
                        <div class="field">
                            <div class="label">Date</div>
                            <input type="text" required />
                        </div>
                        <div class="field">
                            <div class="label">Gender</div>
                            <select required>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Other</option>
                            </select>
                        </div>
                        <div class="field btns">
                            <button class="prev-4 prev">Previous</button>
                            <button class="next-4 next">Next</button>
                        </div>
                    </div>

                    <div class="page">
                        <div class="title">Login Details:</div>
                        <div class="field">
                            <div class="label">Username</div>
                            <input type="text" required />
                        </div>
                        <div class="field">
                            <div class="label">Password</div>
                            <input type="password" required />
                        </div>
                        <div class="field btns">
                            <button class="prev-5 prev">Previous</button>
                            <button class="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <script>
            initMultiStepForm();

function initMultiStepForm() {
    const progressNumber = document.querySelectorAll(".step").length;
    const slidePage = document.querySelector(".slide-page");
    const submitBtn = document.querySelector(".submit");
    const progressText = document.querySelectorAll(".step p");
    const progressCheck = document.querySelectorAll(".step .check");
    const bullet = document.querySelectorAll(".step .bullet");
    const pages = document.querySelectorAll(".page");
    const nextButtons = document.querySelectorAll(".next");
    const prevButtons = document.querySelectorAll(".prev");
    const stepsNumber = pages.length;

    if (progressNumber !== stepsNumber) {
        console.warn(
            "Error, number of steps in progress bar do not match number of pages"
        );
    }

    document.documentElement.style.setProperty("--stepNumber", stepsNumber);

    let current = 1;

    for (let i = 0; i < nextButtons.length; i++) {
        nextButtons[i].addEventListener("click", function (event) {
            event.preventDefault();

            inputsValid = validateInputs(this);
            // inputsValid = true;

            if (inputsValid) {
                slidePage.style.marginLeft = `-${
                    (100 / stepsNumber) * current
                }%`;
                bullet[current - 1].classList.add("active");
                progressCheck[current - 1].classList.add("active");
                progressText[current - 1].classList.add("active");
                current += 1;
            }
        });
    }

    for (let i = 0; i < prevButtons.length; i++) {
        prevButtons[i].addEventListener("click", function (event) {
            event.preventDefault();
            slidePage.style.marginLeft = `-${
                (100 / stepsNumber) * (current - 2)
            }%`;
            bullet[current - 2].classList.remove("active");
            progressCheck[current - 2].classList.remove("active");
            progressText[current - 2].classList.remove("active");
            current -= 1;
        });
    }
    submitBtn.addEventListener("click", function () {
        bullet[current - 1].classList.add("active");
        progressCheck[current - 1].classList.add("active");
        progressText[current - 1].classList.add("active");
        current += 1;
        setTimeout(function () {
            alert("Your Form Successfully Signed up");
            location.reload();
        }, 800);
    });

    function validateInputs(ths) {
        let inputsValid = true;

        const inputs =
            ths.parentElement.parentElement.querySelectorAll("input");
        for (let i = 0; i < inputs.length; i++) {
            const valid = inputs[i].checkValidity();
            if (!valid) {
                inputsValid = false;
                inputs[i].classList.add("invalid-input");
            } else {
                inputs[i].classList.remove("invalid-input");
            }
        }
        return inputsValid;
    }
}

        </script>
    </body>
>>>>>>> 12cfdd784300365bb88f73f0e75f3968afc8487b
</html>
