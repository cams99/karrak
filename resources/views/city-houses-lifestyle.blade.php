@extends('layouts.app')
@section('title', 'City Houses Lifestyle')
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
    img.logo, .nav-img, .navbar-toggler {
        filter: hue-rotate(0deg) brightness(40%);
    }
    .images .row {
        height: 35vh;
    }
    .build {
        height: 51vh;
        padding: 210px 190px 0 0;
        min-height: 430px;
    }
    .build h1 {
        margin-bottom: 8%;
    }
    .build p {
        font-size: 21px;
        font-style: italic;
        color: #323945;
    }
    .white-house {
        background: linear-gradient(#645F5F49, #645F5F49), url('../images/Casa- features.jpg') no-repeat;
        background-size: 120% 135%;
        background-position: center;
    }
    .stone-house {
        background: linear-gradient(#6D6D6C40, #6D6D6C40), url('../images/20907-KARRAK-P4.3-carrusel-3.jpg') no-repeat;
        background-size: 112% 190%;
        background-position-x: left;
        background-position-y: 70%;
    }

    .white-house a:hover, .stone-house a:hover {
        text-decoration: none;
    }
    .white-house a h2, .stone-house a h2 {
        transition: all .3s;
    }
    .white-house a:hover h2, .stone-house a:hover h2 {
        color: #CC6600 !important; 
    }

    @media (max-width: 1280px) {
        .carbon h2 {
            margin-right: 150px;
        }
        .build {
            padding: 210px 150px 0 0;
        }
    }
    @media (max-width: 1024px) {
        .build {
            text-align: center;
            padding: 210px 50px 0; 
        }
        .build p br {
            display: none;
        }
        .carbon {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .carbon h2 {
            margin: 0;
        }
    }
    @media (max-width: 800px) {
        .build {
            padding: 175px 50px 0;
        }
        .carbon h2 {
            width: 80%;
            text-align: center;
            font-size: 30px;
        }
        .build h1 {
            font-size: 40px;
        }
        .build p {
            font-size: 18px;
        }
    }
    @media (max-width: 475px) {
        .build h1 {
            font-size: 35px;
        }
        #white-house, #stone-house {
            max-width: 100%;
            flex-basis: 100%;
        }
    }
    @media (max-width: 425px) {
        .build {
            padding: 175px 40px 0;
            min-height: 490px;
        }
    }
    @media (max-width: 375px) {
        .build {
            min-height: 510px;
        }
    }
    @media (max-width: 325px) {
        .build h1 {
            font-size: 30px;
        }
    }

    /* Altura */
    @media (max-height: 850px) {
        body {
            overflow-y: scroll;
        }
    }
</style>
<div class="page4-5 row no-gutters fade-in">
    <div class="build">
        <h1 class="semibold">
            Why you choose a sustainable lifestyle?
        </h1>
        <p>
            Our homes minimize energy during design, construction and functionality, have be their ways to recycling<br>
            system and energy sustainability technology. Take a look at our Features and Get Started!
        </p>
    </div>
    <div class="col-12 carbon fade-in">
        <h2 class="semibold">Working towards Zero Carbon Footprint</h2>
    </div>
    <div class="col-12 images">
        <div class="row no-gutters">
            <div id="white-house" class="col-6 white-house fade-in">
                <a href="{{ route('features') }}">
                    <h2 class="semibold">
                        Sustainability features<br>
                        for your home.
                    </h2>
                </a>    
            </div>
            <div id="stone-house" class="col-6 stone-house fade-in">
                <a href="#">
                    <h2 class="semibold">
                        Follow our Blog.
                    </h2>
                </a>
            </div>
        </div>
    </div>
    @include('layouts.elementos.redes')
</div>
@endsection
