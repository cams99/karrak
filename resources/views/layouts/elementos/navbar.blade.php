<style>
    .nav-item {
        position: relative;
    }
    .nav-link {
        width: max-content;
    }
    .nav-link ~ i {
        display: none;
    }
    .nav-item div {
        display: none;
        position: absolute;
        top: 100%;    
        left: 50%;
        transform: translate(-50%, 0);
        width: max-content;
        transition: all .3s;
    }
    .nav-item div button {
        display: none;
        margin: auto;
        color: #FFF;
        text-align: center;
    }
    .nav-item:first-child div {
        left: 0;
        text-align: left;
        transform: translate(0, 0);
    }
    .nav-item:last-child div {
        right: 0;
        left: unset;
        text-align: right;
        transform: translate(0, 0);
    }
    .nav-item div a {
        color: #FFF;
        margin: 0 10px;
        transition: all .3s;
        text-align: center;
    }
    .nav-item div a:hover {
        color: #000;
        text-decoration: none;
    }
    .nav-link:hover ~ div, .nav-link ~ div:hover {
        display: block;
    }
    .fade-in {
        animation-duration: .3s;
    }
    .navbar-collapse {
        transition: all .3s;
    }
    .margin-left {
        margin-left: -49% !important;
    }
    @media (max-width: 991px) {
        .nav-item {
            justify-content: space-between;
            align-items: center;
            display: flex;
        }
        .nav-item {
            position: unset;
        }
        .nav-link, .nav-link ~ i {
            display: inline-block;
        }
        .nav-link:hover ~ div, .nav-link ~ div:hover {
            display: none;
        }
        .nav-item div {
            top: 5%;
            left: 400% !important;
            transform: translate(-25%, 0);
        }
        .nav-item .ml {
            left: 175% !important;
        }
        .nav-item div a, .nav-item div button {
            display: block;
            margin-bottom: 20px !important;
        }
    }
    @media (max-width: 375px) {
        .offset-3 {
            margin-left: 20%;
        }
        .margin-left {
            margin-left: -59% !important;
        }
        .col-6 {
            -ms-flex: 0 0 50%;
            flex: 0 0 60%;
            max-width: 60%;
        }
        .nav-item .ml {
            left: 160% !important;
        }
    }
</style>
<nav class="row navbar navbar-expand-lg">
    <div class="col-12">
        <div class="row">
            <div class="col-2 offset-1 centrar"> 
                <a href="{{ route('home') }}"><img src="{{asset('/images/Karrak Homes Logo.png')}}" class="logo nav-img"></a>
            </div>
            <button class="navbar-toggler col-4 offset-5" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <img src="{{asset('/images/Elementos circulares 2.png')}}">
            </button>
            <div class="collapse navbar-collapse col-6 offset-3 col-lg-7 offset-lg-0" id="navbarTogglerDemo03">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link light" href="{{ route('home') }}">Houses</a><i id="0" class="fas fa-chevron-right"></i>
                        <div id="nav-0" class="fade-in">
                            <button class="back"><i class="fas fa-chevron-left"></i> Back</button>
                            <a href="{{ route('home-features') }}">Features</a>
                            <a href="{{ route('home-quote') }}">Quote</a>
                            <a href="{{ route('home-building') }}">Building</a>
                            <a href="{{ route('home-lifestyle') }}">Lifestyle</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link light" href="{{ route('country-houses') }}">Country Houses</a><i id="1" class="fas fa-chevron-right"></i>
                        <div id="nav-1" class="fade-in">
                            <button class="back"><i class="fas fa-chevron-left"></i> Back</button>
                            <a href="{{ route('country-houses-features') }}">Features</a>
                            <a href="{{ route('country-houses-individual') }}">Individual Country Houses</a>
                            <a href="{{ route('country-houses-building') }}">Building</a>
                            <a href="{{ route('country-houses-lifestyle') }}">Lifestyle</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link light" href="{{ route('city-houses') }}">City Houses</a><i id="2" class="fas fa-chevron-right"></i>
                        <div id="nav-2" class="fade-in">
                            <button class="back"><i class="fas fa-chevron-left"></i> Back</button>
                            <a href="{{ route('city-houses-features') }}">Features</a>
                            <a href="{{ route('city-houses-individual') }}">Individual City Houses</a>
                            <a href="{{ route('city-houses-building') }}">Building</a>
                            <a href="{{ route('city-houses-lifestyle') }}">Lifestyle</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link light" href="{{ route('getstarted') }}">Get Started</a><i id="3" class="fas fa-chevron-right"></i>
                        <div id="nav-3" class="fade-in">
                            <button class="back"><i class="fas fa-chevron-left"></i> Back</button>
                            <a href="{{ route('getstarted-building') }}">Building</a>
                            <a href="{{ route('getstarted-finance') }}">Finance</a>
                            <a href="{{ route('getstarted-occupancy') }}">Occupancy and support</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link light" href="{{ route('features') }}">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link light" href="{{ route('contact') }}">Contact Us</a><i id="5" class="fas fa-chevron-right"></i>
                        <div id="nav-5" class="fade-in">
                            <button class="back"><i class="fas fa-chevron-left"></i> Back</button>
                            <a href="{{ route('contact-about') }}">About Us</a>
                            <a href="{{ route('contact-people') }}">People Images</a>
                        </div>
                    </li>
                </ul>

            </div>
            <div class="col-1 centrar">
                <img src="{{asset('/images/201904-KARRAK-web.svg')}}" class="menu nav-img" id="menu">
            </div>
        </div>
    </div>
</nav>
<div class="linea"></div>

