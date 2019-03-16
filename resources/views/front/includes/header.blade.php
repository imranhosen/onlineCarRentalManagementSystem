<div class="mobile-top-panel__fixed">
    <div class="container">
        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="menu-navigation navbar-collapse collapse" background-color="@component('yellow') >

                <!-- Left nav -->
                <ul class="menu-navigation__list nav navbar-nav">
                    <li class="current"><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/about') }}">About us</a></li>
                    <li><a href="{{ url('/fleet') }}">Fleet <i class="icon-arrow-down-sign-to-navigate"></i></a>
                        <ul class="sub-menu dropdown-menu">
                            <li><a href="fleet-second.html">Fleet page 2</a></li>
                            <li><a href="{{ url('/fleet') }}">Cars <i class="icon-arrow-down-sign-to-navigate"></i></a>
                                {{--<ul class="dropdown-menu">--}}
                                    {{--<li><a href="#">Executive Sedans <i class="icon-arrow-down-sign-to-navigate"></i></a>--}}
                                        {{--<ul class="dropdown-menu">--}}
                                            {{--<li><a href="#">Sub Item 1</a></li>--}}
                                            {{--<li><a href="#">Sub Item 2</a></li>--}}
                                            {{--<li class="disabled"><a class="disabled" href="#">Disabled item</a></li>--}}
                                            {{--<li class="divider"></li>--}}
                                            {{--<li><a href="#">Sub Item 3</a></li>--}}
                                            {{--<li><a href="#">Sub Item 4</a></li>--}}
                                            {{--<li><a href="#">Sub Item 5</a></li>--}}
                                            {{--<li><a href="#">Sub Item 6</a></li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                    {{--<li><a href="{{ url('/fleet') }}">Luxury Sedans</a></li>--}}
                                    {{--<li><a href="{{ url('/fleet') }}">Limousine</a></li>--}}
                                    {{--<li><a href="{{ url('/fleet') }}">Sport Car</a></li>--}}
                                    {{--<li><a href="{{ url('/fleet') }}">SUV</a></li>--}}
                                {{--</ul>--}}
                            </li>
                            {{--<li><a href="{{ url('/fleet') }}">Mini bus</a></li>--}}
                            {{--<li><a href="{{ url('/fleet') }}">Motobikes</a></li>--}}
                            {{--<li><a href="{{ url('/fleet') }}">Yachts</a></li>--}}
                            {{--<li><a href="{{ url('/fleet') }}">Airplane</a></li>--}}
                            {{--<li><a href="{{ url('/fleet') }}">Helicopter</a></li>--}}
                        </ul>
                    </li>
                    <li><a href="{{ url('/service') }}">Services <i class="icon-arrow-down-sign-to-navigate"></i></a>
                        <ul class="sub-menu dropdown-menu">
                            <li><a href="{{ url('/service') }}">24 Hour Airport Services</a></li>
                            <li><a href="{{ url('/service') }}">Business Travel</a></li>
                            <li><a href="{{ url('/service') }}">Corporate</a></li>
                            <li><a href="{{ url('/service') }}">Meetings &#38; Events</a></li>
                            <li><a href="{{ url('/service') }}">Private Tours</a></li>
                            <li><a href="{{ url('/service') }}">To My Door</a></li>
                            <li><a href="{{ url('/service') }}">Chauffeur Service</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url('/rate') }}">Rates</a></li>
                    <li><a href="{{ url('/driver') }}">Our drivers</a></li>
                    <li><a href="{{ url('/tips') }}">Tips</a></li>
                    <li><a href="{{ url('/blog') }}">Blog <i class="icon-arrow-down-sign-to-navigate"></i></a>
                        {{--<ul class="sub-menu dropdown-menu">--}}
                            {{--<li><a href="{{ url('/blog') }}">Blog list</a></li>--}}
                            {{--<li><a href="blog-masonry.html">Masonry layout</a></li>--}}
                            {{--<li><a href="single-post.html">Single Post</a></li>--}}
                            {{--<li><a href="typography.html">Typography</a></li>--}}
                        {{--</ul>--}}
                    </li>
                    <li><a href="{{ url('/contact') }}">Contacts</a></li>
                </ul>

            </div><!--/.nav-collapse -->
        </div>
        {{--<div class="social-list">--}}
            {{--<span class="social-list__text">Find us here:</span>--}}
            {{--<ul class="social-list__icons">--}}
                {{--<li><a href="www.facebook.com"><i class="icon-facebook-logo"></i></a></li>--}}
                {{--<li><a href="www.twitter.com"><i class="icon-twitter-letter-logo"></i></a></li>--}}
                {{--<li><a href="https://plus.google.com"><i class="icon-google-plus"></i></a></li>--}}
                {{--<li><a href="https://www.linkedin.com"><i class="icon-linkedin-logo"></i></a></li>--}}
            {{--</ul>--}}
        {{--</div>--}}
    </div>
</div>
<div class="header-container_wrap container">
    <div class="header-container__flex">
        <div class="logo">
            <a href="{{ url('/') }}">
                <i class="icon-logo"></i>
                <span>Rental</span>Cars
            </a>
        </div>

        <div class="social-list">
            <span class="social-list__text">Find Us Here:</span>
            <ul class="social-list__icons">
                <li><a href="www.facebook.com"><i class="icon-facebook-logo"></i></a></li>
                <li><a href="www.twitter.com"><i class="icon-twitter-letter-logo"></i></a></li>
                <li><a href="https://plus.google.com"><i class="icon-google-plus"></i></a></li>
                <li><a href="https://www.linkedin.com"><i class="icon-linkedin-logo"></i></a></li>
            </ul>
        </div>


        <div class="phone_block">
            <span class="text-success text "><i class="icon-telephone"></i>Call: 01749207035</span>
            <small class="glyphicon-text-color " >Our Reservation Specialists 24/7</small>
        </div>
        <div class="cssmenu">
            <ul>
                @if(Session::get('customerId'))
                    <li><a href="{{ url('/customer-logout') }}">Logout</a></li>
                @else
                    <li><a href="{{ url('/booking') }}">Log In</a></li>
                    <li><a href="{{ url('/booking') }}">Sign Up</a></li>
                @endif
            </ul>
        </div>
    </div>
</div>
<div class="header-navigation-wrap stickUp">
    <!-- Navbar fixed top -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="menu-navigation navbar-collapse collapse">

                <!-- Left nav -->
                <ul class="menu-navigation__list nav navbar-nav">
                    <li class="current"><a href="{{ url('/') }}" data-hover="Home">Home</a></li>
                    <li><a href="{{ url('/about') }}" data-hover="About us">About us</a></li>
                    <li><a href="{{ url('/fleet') }}" data-hover="Fleet">Fleet <i class="icon-arrow-down-sign-to-navigate"></i></a>
                        <ul class="sub-menu dropdown-menu">
                            {{--<li><a href="fleet-second.html">Fleet page 2</a></li>--}}
                            <li><a href="{{ url('/fleet') }}">Cars <i class="icon-arrow-down-sign-to-navigate"></i></a>
                                {{--<ul class="dropdown-menu">--}}
                                    {{--<li><a href="#">Executive Sedans <i class="icon-arrow-down-sign-to-navigate"></i></a>--}}
                                        {{--<ul class="dropdown-menu">--}}
                                            {{--<li><a href="#">Sub Item 1</a></li>--}}
                                            {{--<li><a href="#">Sub Item 2</a></li>--}}
                                            {{--<li class="disabled"><a class="disabled" href="#">Disabled item</a></li>--}}
                                            {{--<li class="divider"></li>--}}
                                            {{--<li><a href="#">Sub Item 3</a></li>--}}
                                            {{--<li><a href="#">Sub Item 4</a></li>--}}
                                            {{--<li><a href="#">Sub Item 5</a></li>--}}
                                            {{--<li><a href="#">Sub Item 6</a></li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                    {{--<li><a href="{{ url('/fleet') }}">Luxury Sedans</a></li>--}}
                                    {{--<li><a href="{{ url('/fleet') }}">Limousine</a></li>--}}
                                    {{--<li><a href="{{ url('/fleet') }}">Sport Car</a></li>--}}
                                    {{--<li><a href="{{ url('/fleet') }}">SUV</a></li>--}}
                                {{--</ul>--}}
                            </li>
                            {{--<li><a href="{{ url('/fleet') }}">Mini bus</a></li>--}}
                            {{--<li><a href="{{ url('/fleet') }}">Motobikes</a></li>--}}
                            {{--<li><a href="{{ url('/fleet') }}">Yachts</a></li>--}}
                            {{--<li><a href="{{ url('/fleet') }}">Airplane</a></li>--}}
                            {{--<li><a href="{{ url('/fleet') }}">Helicopter</a></li>--}}
                        </ul>
                    </li>
                    <li><a href="{{ url('/service') }}" data-hover="Services">Services <i class="icon-arrow-down-sign-to-navigate"></i></a>
                        {{--<ul class="sub-menu dropdown-menu">--}}
                            {{--<li><a href="{{ url('/service') }}">24 Hour Airport Services</a></li>--}}
                            {{--<li><a href="{{ url('/service') }}">Business Travel</a></li>--}}
                            {{--<li><a href="{{ url('/service') }}">Corporate</a></li>--}}
                            {{--<li><a href="{{ url('/service') }}">Meetings &#38; Events</a></li>--}}
                            {{--<li><a href="{{ url('/service') }}">Private Tours</a></li>--}}
                            {{--<li><a href="{{ url('/service') }}">To My Door</a></li>--}}
                            {{--<li><a href="{{ url('/service') }}">Chauffeur Service</a></li>--}}
                        {{--</ul>--}}
                    </li>
                    <li><a href="{{ url('/rate') }}" data-hover="Rates">Rates</a></li>
                    <li><a href="{{ url('/driver') }}" data-hover="Our drivers">Our drivers</a></li>
                    <li><a href="{{ url('/tips') }}" data-hover="Testimonials">Tips</a></li>
                    <li><a href="{{ url('/blog') }}" data-hover="Blog">Blog <i class="icon-arrow-down-sign-to-navigate"></i></a>
                        {{--<ul class="sub-menu dropdown-menu">--}}
                            {{--<li><a href="{{ url('/blog') }}">Blog list</a></li>--}}
                            {{--<li><a href="blog-masonry.html">Masonry layout</a></li>--}}
                            {{--<li><a href="single-post.html">Single Post</a></li>--}}
                            {{--<li><a href="typography.html">Typography</a></li>--}}
                        {{--</ul>--}}
                    </li>
                    <li><a href="{{ url('/contact') }}" data-hover="Contacts">Contacts</a></li>
                </ul>

            </div><!--/.nav-collapse -->
        </div><!--/.container -->
    </div>
</div>