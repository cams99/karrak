@extends('layouts.app')
@section('title', 'Country Houses Building')
@section('content')
<style>
    .background {
        background: #FFFFFF !important;
        border-bottom: 3px solid #00000050;
    }
    .nav-item div button, .nav-link ~ i {
        color: #666;
    }
    footer {
        display: none !important;
    }
    .nav-link, .nav-item div a {
        color: #666;
    }   
    .navbar {
        background: none;
    }
    .linea {
        width: 60%;
        border: 2px solid #666;
        position: absolute;
        margin-top: 130px;
        right: 0;
        opacity: 0.47;
    }
    img.logo, .nav-img, button.navbar-toggler img {
        filter: hue-rotate(0deg) brightness(40%);
    }
    .build {
        min-height: 280px;
    }
    .build-image {
        min-height: 500px;
    }
    .build-image-text a {
        color: #323945;
    }
    .build-image-text a:hover {
        color: #FFF;
        text-decoration: none;
    }

    @media (max-width: 1440px) {
        .build-text p {
            font-size: 17px;
        }
        .build-image {
            min-height: 500px;
        }
    }
    @media (max-width: 1024px) {
        .build {
            padding: 180px 55px 0 0;
        }
        .build-text p {
            padding: 20px 55px 0 0;
        }
        .build-image-text button, .build-image-text a {
            height: unset; 
        }
    }
    @media (max-width: 800px) {
        .house {
            display: none;
        }
        .build-right {
            margin: 0; 
            max-width: 100%;
            flex-basis: 100%;
        }
    }
    @media (max-width: 600px) {
        .build-text p {
            font-size: 15px;
        }
    }
    @media (max-width: 475px) {
        .build h1 {
            font-size: 35px;
        }
        .build-image-text h2 {
            font-size: 30px;
        }
        .build-image-text p {
            font-size: 20px;        
        }
        .build-image-text button, .build-image-text a {
            font-size: 17px;
        }
        .build-image {
            min-height: 400px;
        }
        .build {
            min-height: 250px;
        }
        .build {
            padding: 180px 35px 0 0;
        }
    }
    @media (max-width: 425px) {
        .build h1 {
            font-size: 30px;
        }
        .build-image {
            min-height: 420px;
        }
    }
    @media (max-width: 325px) {
        .build h1 {
            font-size: 24px;
        }
        .build-image-text h2 {
            font-size: 24px;
        }
        .build-image-text p {
            font-size: 17px;
        }
        .build-image-text button, .build-image-text a {
            font-size: 14px;
        }
    }

    /* Altura */
    @media (max-height: 850px) {
        body {
            overflow-y: scroll;
        }
    }
</style>
<div class="row no-gutters fade-in">
    <div class="build">
        <h1 class="semibold">
            How do you build your<br>
            sustainable home?
        </h1>
    </div>
    <div class="col-12">
        <div class="row no-gutters build-center">
            <div class="col-6 house fade-in"></div>
            <div class="col-6 build-right">
                <div class="build-text">
                    <p class="light">
                        At Karrak Homes a diverse team from manufacturers to architects have come<br>
                        together to produce a high quality tested product and a unique service. Find out<br>
                        more at our Get Started page, or just watch our video.
                    </p>
                </div>
                <div class="build-image fade-in">
                    <div class="build-image-text">
                        <h2 class="semibold">Did you fall for one of our designs?</h2>
                        <p>
                            Get a cost breakdown of our main features for<br>
                            your Home.
                        </p>
                        <div>
                            <button class="light">
                                Download Country<br>
                                Houses Brochure.
                            </button>
                            <a href="{{ route('getacost') }}" class="light">Get a Cost Breakdown.</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.elementos.redes')
</div>
@endsection
