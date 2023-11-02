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
                    <p>More Details</p>
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
                            <div class="label">Name</div>
                            <input id= "name" placeholder="Enter Your Name" type="text" required />
                        </div>
                        <div class="field">
                            <div class="label">Email</div>
                            <input id="email" placeholder="Enter Your Email" type="text" required />
                        </div>
                        <div class="field">
                            <div class="label">City</div>
                            <input id="city" placeholder="Enter the city" type="text" required />
                        </div>
                        <div class="field">
                            <div class="label">Intrested In</div>
                            <select  id="intrested" required>
                            <option value="">Select</option>
                            <option value="Apartment">Apartment </option>
                            <option value="Villa">Villa</option>
                            <option value="Commercial ">Commercial </option>
                            <option value="Resorts ">Resorts </option>
                            <option value="Renting  ">Renting  </option>
                            <option value="Just browsing  ">Just browsing  </option>
                            <option value="Let's decide later ">Let's decide later </option>
                            <option value="Others ">Others </option>
                            </select>
                        </div>
                        <div class="field">
                            <button class="firstNext next">Next</button>
                        </div>
                    </div>

                    <div class="page">
                        <div class="title">Contact Info:</div>
                        <div class="field">
                            <div class="label">Mobile</div>
                            <input type="Number"  maxlength="10" placeholder="Enter Your Mobile" required />
                        </div>
                        <div class="field">
                        <button class="next-1 next">Verify</button>
                        </div>
                        <div class="field btns">
                            <button class="prev-1 prev">Previous</button>
                            <button class="next-1 next">Next</button>
                        </div>
                    </div>
                    <div class="page">
                        <div class="field">
                            <div class="label">Your Budget</div>
                            <input type="text" required />
                        </div>
                        <div class="field">
                            <div class="label">Which city are you looking the property in </div>
                            <input type="text" required />
                        </div>
                        <div class="field">
                            <div class="label">Do you require any loans </div>
                            <select required>
                            <option value="">Select</option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>
                        <div class="field">
                            <div class="label">Which bank do you bank with </div>
                            <select required>
                                <option value="">Select</option>
                                <option value="">SBI</option>
                                <option value="">ICICI</option>
                                <option value="">HDFC</option>
                                <option value="">AXIS</option>
                            </select>
                        </div>
                        <div class="field">
                            <div class="label">Your annual income </div>
                            <input type="text" required />
                        </div>
                        <div class="field">
                            <div class="label">Marital Status </div>
                            <select required>
                            <option value="">Select</option>
                                <option>Single</option>
                                <option>Married</option>
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

    </body>
</html>

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
