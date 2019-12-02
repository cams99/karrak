@extends('layouts.app')
@section('title', 'Country Houses Features')
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
    img.logo, .nav-img {
        filter: hue-rotate(0deg) brightness(40%);
    }
    .solar a, .water a {
        color: #FFF;
        transition: all .3s;
    }
    .solar a:hover, .water a:hover {
        color: #CC6600;
        text-decoration: none;
    }
    .footer a {
        color: #323945;
    }
    .footer a:hover {
        color: #FFF;
        text-decoration: none;
    }
    @media (max-width: 1440px) {
        .water h3, .solar h2 {
            font-size: 30px;
        }
        .footer h4, a.climate {
            font-size: 16px;
        }
    }
    @media (max-width: 1280px) {
        .water h3, .solar h2 {
            font-size: 25px;
        }
    }
    @media (max-width: 1024px) {
        .greener h1 {
            font-size: 40px;
        }
        .water h3, .solar h2 {
            font-size: 20px;
        }
        .footer h4, a.climate {
            font-size: 14px;
        }
    }
    @media (max-width: 960px) {
        .footer {
            flex-wrap: wrap;
            align-content: center;
            text-align: center;
        }
        .greener p {
            font-size: 18px;
        }
    }
    @media (max-width: 800px) {
        .water h3, .solar h2 {
            padding: 0 0 80px 15px;
            font-size: 18px;
        }
        .greener {
            flex-wrap: wrap;
            padding: 190px 90px 0 0;
        }
        button.navbar-toggler img {
            filter: hue-rotate(0deg) brightness(40%);
        }
    }
    @media (max-width: 720px) {
        .greener {
            padding: 190px 50px 0 25px;
        }
        .water h3 {
            padding: 0 60px 80px 15px;
        }
    }
    @media (max-width: 475px) {
        #solar, #water {
            max-width: 100%;
            flex-basis: 100%;
            justify-content: center;
        }
        .water h3, .solar h2 {
            padding: 0;
            text-align: center;
            padding: 20px 10px;
        }
    }
    @media (max-width: 475px) {
        .greener h1 {
            font-size: 35px;
            margin-bottom: 35px;
        }
        .greener p {
            font-size: 16px;
        }
    }

    @media (max-height: 850px) {
        body {
            overflow-y: scroll;
        }
    }
</style>
<div class="row no-gutters fade-in">
    <div class="greener">
        <h1 class="semibold">Get greener</h1>
        <p>Be part of (Country Houses name), and give back to the enviroment ou love.</p>
    </div>
    <div class="col-12">
        <div class="row no-gutters greener-center">
            <div id="solar" class="col-6 solar fade-in">
                <a href="{{ route('features') }}"><h2 class="semibold">Be Solar.<br>View our green Features</h2></a>
            </div>
            <div id="water" class="col-6 water fade-in">
                <a href="{{ route('features') }}"><h3 class="semibold">The Water Recycling System you need.<br>View our green Features</h3></a>
            </div>
        </div>
    </div>
    <div class="footer col-12">
        <h4 class="light">Provide us with a location and we will come back to you with climatic information on your location and recommendations</h4>
        <a href="{{ route('contact') }}" class="climate">YOUR CLIMATE</a>
    </div>
    @include('layouts.elementos.redes')
</div>
@endsection
