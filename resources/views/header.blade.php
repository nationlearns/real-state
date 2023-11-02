<link type="text/css" rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
<header id="header" class="transparent-navbar">

<div class="container">

    <div class="navbar-header">

        <div class="navbar-brand">
            <a class="logo" href="index-2.html">
                <img class="logo-img" src="{{ asset('assets/img/logo.png') }}" alt="logo">
                <img class="logo-alt-img" src="{{ asset('assets/img/logo-alt.png') }}" alt="logo">
            </a>
        </div>


        <button class="navbar-toggle">
            <i class="fa fa-bars"></i>
        </button>

    </div>


<nav id="nav">
<ul class="main-nav nav navbar-nav navbar-right">
<li><a href="#home">Home</a></li>
<li><a href="#about">About</a></li>
<li><a href="#schedule">Schedule</a></li>
<li><a href="#speakers">Speakers</a></li>
<li><a href="#sponsors">Sponsors</a></li>
<li><a href="#contact">Contact</a></li>
<li><a href="blog.html">Blog</a></li>
<li><a href="{{url('user-login')}}">Login</a></li>
<li><a href="{{url('auth-register')}}">Register</a></li>

</ul>
</nav>
</div>
</header>