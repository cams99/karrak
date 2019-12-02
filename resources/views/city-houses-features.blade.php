@extends('layouts.app')
@section('title', 'City Houses Features')
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
    img.logo, .nav-img, button.navbar-toggler {
        filter: hue-rotate(0deg) brightness(40%);
    }
    h1 span {
        display: block;
        margin-bottom: 10px;
    }
    .solar {
        background: linear-gradient(#FFFFFF20, #FFFFFF20), url(../images/20907-KARRAK-P4.2-Seccion1.jpg) no-repeat;
        background-size: 100% 100%;
    }
    .solar h2 {
        padding: 0 0 40px 50px;
    }
    .water {
        background: url('../images/20907-KARRAK-P4.2-Seccion2.jpg') no-repeat;
        background-size: 100% 100%;
    }
    .water h3 {
        padding: 0 0 40px 50px;
    }
    .greener {
        height: 36vh;
    }
    .footer {
        height: 29vh;
        position: relative;
    }
    .footer p {
        position: absolute;
        top: 13%;
        font-size: 20px;
        text-align: center;
        color: #323945;
    }
    .footer h4 {
        margin-top: 4%;
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
        margin-top: 4%;
        margin-bottom: 5px;
        transition: all .3s;
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
        .row.no-gutters.greener-center {
            max-height: 250px;
        }
        .footer p {
            position: unset;
            font-size: 15px;
        }
        .greener {
            padding-right: 0;
            text-align: center;
        }
    }
    @media (max-width: 800px) {
        .water h3, .solar h2 {
            padding: 0 0 80px 15px;
            font-size: 18px;
        }
        .greener {
            flex-wrap: wrap;
        }
    }
    @media (max-width: 720px) {
        .water h3 {
            padding: 0 60px 80px 15px;
        }
    }
    @media(max-width: 600px) {
        .greener h1 {
            font-size: 30px;
        }
        .footer p {
            margin-top: 20px;
        }
        .row.no-gutters.greener-center {
            max-height: 230px;
        }
        .footer h4, .footer a {
            margin-top: unset;
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
        .greener h1 {
            font-size: 30px;
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
        <h1 class="semibold">
            <span>Working towards Zero Carbon Footprint</span>
            Elevate your design. Assemble.
        </h1>
    </div>
    <div class="col-12">
        <div class="row no-gutters greener-center">
            <div id="solar" class="col-6 solar fade-in">
                <a href="{{ route('features') }}">
                    <h2 class="semibold">Be Solar.<br>View our green Features</h2>
                </a>
            </div>
            <div id="water" class="col-6 water fade-in">
                <a href="{{ route('features') }}">
                    <h3 class="semibold">The Water Recycling System you need.<br>View our green Features</h3>
                </a>
            </div>
        </div>
    </div>
    <div class="footer col-12">
        <p>
            Countries like Japan, Sweden and Germany have leaders in prefabricated housing. Japan, endures a highly condensed population and has a solid 15%<br>
            of prefab construction market. Prefab is in demand for a smarter future.
        </p>
        <h4 class="light">Provide us with a location and we will come back to you with climatic information on your location and recommendations</h4>
        <a href="{{ route('contact') }}" class="climate">YOUR CLIMATE</a>
    </div>
    @include('layouts.elementos.redes')
</div>
@endsection
