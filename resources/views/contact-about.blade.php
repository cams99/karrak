@extends('layouts.app')
@section('title', 'Contact About Us')
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
    .medium-text {
        min-height: 220px;
    }
    .play-button {
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
    }
    
    @media (max-width: 800px) {
        .medium-text {
            padding: 15px 50px 15px 15px;
        }
    }
    @media (max-width: 600px) {
        .principal {
            margin-top: 160px;
        }
        .medium-text {
            min-height: unset;
            height: unset;
        }
        .medium-text p:nth-child(2) {
            margin-bottom: 0;
        }
        .play-button {
            width: 100px !important;
        }
        body {
            overflow-y: scroll;
        }
    }
    @media (max-width: 600px) {
        .medium-text {
            font-size: 14px;
        }
        .footer-img h2 {
            font-size: 37px;
        }
    }
    /* Altura */
    @media (max-height: 700px) {
        body {
            overflow-y: scroll;
        }
        .principal {
            display: none;
            margin-top: 160px;
        }
    }
</style>
<div class="page9-2 row no-gutters fade-in">
    <div class="col-12 principal fade-in">
        <img src="{{asset('/images/20907-KARRAK-video-9,2.png')}}" alt="House">
        <img class="play-button" src="{{asset('/images/201907-KARRAK-botonplay.png')}}" alt="Play">
    </div>
    <div class="medium-text fade-in">
        <p>
            It all started when I became the customer. I was the average customer and did not find the offer I was looking for. In my search, I realized that I wanted the house to reflect my values; I wanted to have a “thinking person’s home” with awareness of the elements, materials and a low impact to the environment. That is the moment when Karrak was born, the idea that energy is continuum and evolves within the living and the environment we live at.
        </p>
        <p>
            I wanted to have the green technology and the manufacturing standards of the world ́s leading industries tailored to Australian specific needs. Karrak Homes is meant to be local and friendly.
        </p>    
    </div>
    <div class="footer-img fade-in">
        <h2 class="semibold">Our Team</h2>
    </div>
    @include('layouts.elementos.redes')
</div>
@endsection

