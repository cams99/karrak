@extends('layouts.app')
@section('title', 'Country Houses Lifestyle')
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
    .page3-5 .build {
        min-height: 260px;
    }
    .energy {
        min-height: 120px;
    }
    .energy p {
        margin: 0;
    }
    .images h2 {
        margin: 0;
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

    @media (max-width: 1024px) {
        .page3-5 .build {
            padding-right: 0;
            text-align: center;
        }
        .carbon {
            justify-content: center;
        }
        .carbon h2 {
            margin: 0;
        }
    }
    @media (max-width: 960px) {
        .build h1 {
            font-size: 40px;
        }
        .energy p {
            font-size: 18px;
        }
        .carbon h2, .images h2 {
            font-size: 34px;
        }
        body {
            overflow-y: scroll;
        }
    }
    @media (max-width: 800px) {
        .build h1 {
            font-size: 36px;
        }
        .carbon h2, .images h2 {
            font-size: 30px;
        }
    }
    @media (max-width: 720px) {
        .carbon h2 {
            width: 70%;
            text-align: center;
        }
        .page3-5 .build {
            padding-top: 160px;
        }
        .energy p br {
            display: none;
        }
    }
    @media (max-width: 475px) {
        .images > div >div {
            max-width: 100%;
            flex-basis: 100%;
        }
    }
    @media (max-width: 325px) {
        .page3-5 .build {   
            padding-top: 150px;
            min-height: 290px;
        }
        .energy {
            min-height: 140px;
        }
        .carbon {
            min-height: 150px;
        }

    }
</style>
<div class="page3-5 row no-gutters fade-in">
    <div class="build">
        <h1 class="semibold">
            Why you choose a sustainable lifestyle?
        </h1>
    </div>
    <div class="col-12 energy fade-in">
        <p class="light"> 
            Our homes minimize energy during design, construction and functionality, have better<br>
            waste recycling systems and energy sustainability technology. Take a look at our<br>
            Features and Get Started!
        </p>
    </div>
    <div class="col-12 carbon fade-in">
        <h2 class="semibold">Working towards Zero Carbon Footprint.</h2>
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
                        Your Lifestyle.<br>
                        Follow our Blog.
                    </h2>
                </a>
            </div>
        </div>
    </div>
    @include('layouts.elementos.redes')
</div>
@endsection
