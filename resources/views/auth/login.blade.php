<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<link href="{{ ('assets/css/login.css') }}" rel="stylesheet">
<body>
<section class="forms-section">
  <h1 class="section-title">User Login</h1>
  <div class="forms">
    <div class="form-wrapper is-active">
      <button type="button" class="switcher switcher-login">
       Login By Mobile
        <span class="underline"></span>
      </button>
      <form class="form form-login">
        <fieldset>
          <legend>Please, enter your email and password for login.</legend>
          <div class="input-block">
            <label for="login-email">Mobile</label>
            <input id="login-mobile" type="phone" placeholder="Enter Your Mobile"  maxlength="10" required>
          </div>
        </fieldset>
        <button type="submit" class="btn-login">Login</button>
      </form>
    </div>
    <div class="form-wrapper">
      <button type="button" class="switcher switcher-signup">
      Login By Email
        <span class="underline"></span>
      </button>
      <form class="form form-signup">
        <fieldset>
          <legend>Please, enter your email, password and password confirmation for sign up.</legend>
          <div class="input-block">
            <label for="signup-email">E-mail</label>
            <input id="login-email" placeholder="Enter Your Email" type="email" required>
          </div>
          <div class="input-block">
            <label for="signup-password">Password</label>
            <input id="signup-password" placeholder="Enter Your Password" type="password" required>
          </div>
        </fieldset>
        <button type="submit" class="btn-signup">Login</button>
      </form>
    </div>
  </div>
</section>
</body>
</html>

<script>
    const switchers = [...document.querySelectorAll('.switcher')]

switchers.forEach(item => {
	item.addEventListener('click', function() {
		switchers.forEach(item => item.parentElement.classList.remove('is-active'))
		this.parentElement.classList.add('is-active')
	})
})
</script>