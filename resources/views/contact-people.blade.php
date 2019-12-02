@extends('layouts.app')
@section('title', 'Contact People')
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
    .our-team-menu {
        min-height: 100px;
    }
    .our-team-images {
        min-height: 300px;
    }

    @media (max-width: 1024px) {
        .our-team-images > div > img {
            width: 110%;
        }
        .our-team-images > div:nth-child(2) {
            width: 29%;
        }
    }
    @media (max-width: 800px) {
        .our-team-menu > a {
            padding: 0 10px;
            font-size: 20px;
        }
        .our-team h2 {
            font-size: 40px;
        }
        .our-team h3 {
            font-size: 28px;
        }
        .our-team-images .text h3 {
            font-size: 36px;
        }
        .our-team-images .text p {
            font-size: 20px;
        }
    }
    @media (max-width: 800px) {
        .our-team-menu > a {
            padding: 0 10px;
            font-size: 18px;
        }
        .our-team-menu {
            padding: 3% 2% 0 2%;
        }
        .our-team-images > div:nth-child(1) {
            width: 38%;
        }
        body {
            overflow-y: scroll;
        }
    }
    @media (max-width: 475px) {
        .our-team-menu > a {
            padding: 0 10px 10px;
            width: 49%;
            text-align: center;
        }
        .our-team-menu {
            text-align: center;
            padding: 20px 50px 0px;
        }
        .our-team-images > div:nth-child(2) {
            width: 33%;
        }
        .our-team-images > div:nth-child(4) {
            display: none;
        }
        .our-team-images > div:nth-child(1) {
            width: 44%;
        }
    }
    @media (max-width: 425px) {
        .our-team-menu {
            padding: 20px 40px 0px 20px;
        }
        .our-team-menu > a {
            font-size: 16px;
        }
    }
    @media (max-width: 375px) {
        .our-team-images > div:nth-child(1) {
            width: 60%;
        }
        .our-team-images > div:nth-child(2) {
            width: 37%;
        }
        .our-team-images > div:nth-child(3) {
            display: none;
        }
        .our-team-menu {
            padding: 20px 20px 0px;
        }
    }

    /* Altura */
    @media (max-height: 700px) {
        .our-team {
            margin-top: 150px;
            height: unset;
        }
        body {
            overflow-y: scroll;
        }
    }
</style>
<div class="page9-3 row no-gutters fade-in">
    <div class="our-team fade-in">
        <h2 class="semibold">Our Team</h2>
        <h3 class="semibold">Meet Karrak's team and partners</h3>
    </div>
    <div class="our-team-menu fade-in">
        <a href="#" class="our-team-item">The Team</a>
        <a href="#" class="our-team-item">Who Builds?</a>
        <a href="#" class="our-team-item">Our Manufacturers</a>
        <a href="#" class="our-team-item">Who Designs?</a>
    </div>
    <div class="our-team-images fade-in">
        <div>
            <img src="{{asset('/images/20907-KARRAK-Carrusel-9,3.jpg')}}" alt="Architect">
            <div class="text">
                <h3 class="semibold">John Doe</h3>
                <p>Architect</p>
            </div>
        </div>
        <div>
            <img src="{{asset('/images/20907-KARRAK-Carrusel-9,3-2.jpg')}}" alt="">
        </div>
        <div>
            <img src="{{asset('/images/20907-KARRAK-Carrusel-9,3-3.jpg')}}" alt="">
        </div>
        <div>
            <img src="{{asset('/images/20907-KARRAK-Carrusel-9,3-4.jpg')}}" alt="">
        </div>
    </div>
    @include('layouts.elementos.redes')
</div>
@endsection

