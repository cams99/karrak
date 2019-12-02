@extends('layouts.app')
@section('title', 'City Houses Individual')
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
    .designed {
        padding: 19vh 11.5vh 0 11.5vh;
    }
    .designed h1 {
        font-size: 48px;
        margin-bottom: 30px;
    }
    .designed p {
        color: #323945;
        font-size: 20px;
        text-align: start;
    }
    #img-1 {
        background: linear-gradient(#66666647, #66666647), url('../images/20907-KARRAK-P4.3-carrusel-1.jpg') no-repeat;
        background-size: 100% 100%;
        height: 100%;
    }
    .image1 {
        background: linear-gradient(#CC660013, #CC660013), url('../images/20907-KARRAK-P4.3-carrusel-1.jpg') no-repeat !important;
        background-size: 100% 100% !important;
    }
    #img-2 {
        background: linear-gradient(#66666647, #66666647), url('../images/20907-KARRAK-P4.3-carrusel-2.jpg') no-repeat;
        background-size: 100% 100%;
        height: 100%;
    }
    .image2 {
        background: linear-gradient(#CC660013, #CC660013), url('../images/20907-KARRAK-P4.3-carrusel-2.jpg') no-repeat !important;
        background-size: 100% 100% !important;
    }
    #img-3 {
        background: linear-gradient(#66666647, #66666647), url('../images/20907-KARRAK-P4.3-carrusel-3.jpg') no-repeat;
        background-size: 100% 100%;
        height: 100%;
    }
    .image3 {
        background: linear-gradient(#CC660013, #CC660013), url('../images/20907-KARRAK-P4.3-carrusel-3.jpg') no-repeat !important;
        background-size: 100% 100% !important;
    }
    #img-4 {
        background: linear-gradient(#66666647, #66666647), url('../images/20907-KARRAK-P4.3-carrusel-4.jpg') no-repeat;
        background-size: 100% 100%;
        height: 100%;
    }
    .image4 {
        background: linear-gradient(#CC660013, #CC660013), url('../images/20907-KARRAK-P4.3-carrusel-4.jpg') no-repeat !important;
        background-size: 100% 100% !important;
    }
    #img-5 {
        background: linear-gradient(#66666647, #66666647), url('../images/20907-KARRAK-P4.3-carrusel-5.jpg') no-repeat;
        background-size: 100% 100%;
        height: 100%;
    }
    .image5 {
        background: linear-gradient(#CC660013, #CC660013), url('../images/20907-KARRAK-P4.3-carrusel-5.jpg') no-repeat !important;
        background-size: 100% 100% !important;
    }
    #img-6 {
        background: linear-gradient(#66666647, #66666647), url('../images/20907-KARRAK-P4.3-carrusel-6.jpg') no-repeat;
        background-size: 100% 100%;
        height: 100%;
    }
    .image6 {
        background: linear-gradient(#CC660013, #CC660013), url('../images/20907-KARRAK-P4.3-carrusel-6.jpg') no-repeat !important;
        background-size: 100% 100% !important;
    }
    .footer a {
        color: #323945;
        transition: all .3s;
    }
    .footer a:hover {
        color: #FFF;
        text-decoration: none;
    }
    #center a {
        opacity: 0;
        position: absolute;
        z-index: 2;
        color: #FFF;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        justify-content: center;
        align-items: center;
        transition: all .3s;
        display: flex;
        font-size: 30px;
    }
    #center a:hover {
        text-decoration: none;
    }
    #center .image:hover a {
        background: #00000050;
        opacity: 1;
    }
    #center .image:hover a:hover {
        text-decoration: none; 
    }

    @media (max-width: 1280px) {
        .footer h4, button.climate {
            font-size: 18px;
            text-align: center;
        }
        .designed h1 {
            margin-bottom: 10px;
        }
    }
    @media (max-width: 1024px) {
        .designed {
            padding: 200px 50px 0 20px;
        }
        .designed h1 {
            font-size: 30px;
        }
        .designed p {
            font-size: 18px;
        }
        .footer {
            flex-wrap: wrap;
            align-content: center;
        }
    }
    @media (max-width: 720px) {
        .designed {
            padding: 200px 20px 0 20px;
        }
    }
    @media (max-width: 600px) {
        .designed h1 {
            font-size: 24px;
        }
       .designed p {
            font-size: 17px;
        }
    }
    @media (max-width: 475px) {
        #img-4, #img-5, #img-6 {
            display: none !important;
        }
        div#center > div {
            width: calc(100% / 4);
        }
        .image {
            width: calc((100%/4)*2) !important;
        }
        .designed h1 {
            font-size: 20px;
        }
        .footer h4, a.climate {
            font-size: 14px;
            text-align: center;
        }
        .designed h1 br {
            display: none;
        }
    }
    @media (max-width: 375px) {
        .designed {
            padding: 160px 20px 0 20px;
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
    <div class="designed">
        <h1 class="semibold">
            Designed to take you away from the city buzz<br>
            into a natural experience
        </h1>
        <p>Your home will be assembled in the short time of 4 days. Choose your preferred design, size, feature ande we will take it from there.</p>
    </div>
    <div class="col-12">
        <div class="row no-gutters designed-center fade-in">
            <div class="col-12" id="center">
                <div id="img-1">
                    <a href="{{ route('house-design') }}">House Details</a>
                </div>
                <div id="img-2">
                    <a href="{{ route('house-design') }}">House Details</a>
                </div>
                <div id="img-3" class="image image3">
                    <a href="{{ route('house-design') }}">House Details</a>
                </div>
                <div id="img-4">
                    <a href="{{ route('house-design') }}">House Details</a>
                </div>
                <div id="img-5">
                    <a href="{{ route('house-design') }}">House Details</a>
                </div>
                <div id="img-6">
                    <a href="{{ route('house-design') }}">House Details</a>
                </div>
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
