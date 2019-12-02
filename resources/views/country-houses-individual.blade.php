@extends('layouts.app')
@section('title', 'Country Houses Individual')
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
    .footer {
        flex-wrap: wrap;
        align-content: center;
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
    button.navbar-toggler img {
        filter: hue-rotate(0deg) brightness(40%);
    }
    .footer a {
        color: #323945;
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

    /* Ancho */
    @media (max-width: 1280px) {
        .footer h4, a.climate {
            font-size: 18px;
            text-align: center;
        }
    }
    @media (max-width: 1024px) {
        .designed {
            padding: 200px 50px 0 20px;
        }
        .designed h1 {
            font-size: 30px;
        }
    }
    @media (max-width: 800px) {
        .designed h1 {
            font-size: 24px;
        }
    }
    @media (max-width: 720px) {
        .designed {
            padding: 200px 20px 0 20px;
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
            Our houses are designed to fit your specific needs<br>
            Choose your preferred design, size and feature and we will<br>
            take it from there.
        </h1>
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
        <a href="" class="climate">YOUR CLIMATE</a>
    </div>
    @include('layouts.elementos.redes')
</div>
@endsection

