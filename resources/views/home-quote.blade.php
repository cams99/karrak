@extends('layouts.app')
@section('title', 'House Quote')
@section('content')
<style>
    .background {
        background: #000000af;
    }
    @media (max-width:767px){  
        footer {
            margin-top: 20vh;
        }
    }
    @media (max-width:425px){  
        footer button {
            font-size: 15px !important;
        }
    }
    .cost a, .questions a, .design-div p {
        color: #FFF;
        transition: all .3s;
    }
    .cost a:hover, .questions a:hover, .design-div p:hover {
        text-decoration: none;
        color: #CC6600;
    }
    .div-features div a:hover, .div-features div a {
        color: #FFF !important;
        text-decoration: none;
    } 
    .cost a:hover + .overlay, .questions a:hover + .overlay, .design-div:hover + .overlay {
        opacity: 0;
    }
    .design-div a:hover ~ .overlay {
        opacity: 0;
    }
    .design-div a {
        text-align: center;
    }
</style>
<div class="page2-3 row no-gutters fade-in">
        <div class="col-12 col-md-4 div-features cost regular">
            <a href="{{ route('getacost') }}">
                <p>
                    Get a cost breakdown. <br>
                    Have an estimate cost <br>
                    of our main features.
                </p>
            </a>
            <div class="overlay"></div>
        </div>
        <h2 class="texto-features bold">
            Our process is designed to be friendly and <br>
            empowering, from choosing your home to tracking <br>
            your delivery, you always have the tools and the <br>
            knowledge.
        </h2>
        <div class="col-12 col-md-4 div-features design">
            <div class="design-div">
                <p class="light">
                    Your Home Design. <br>
                    A High-Design available <br>
                    to everyone.
                </p>
                <a class="bold" href="{{ route('country-houses') }}">COUNTRY HOME</a>
                <a class="bold" href="{{ route('city-houses') }}">CITY HOME</a>
            </div>
            <div class="overlay"></div>
        </div>
        <div class="col-12 col-md-4 div-features questions light">
            <a href="{{ route('getstarted') }}">
                <p>
                    Do you have questions about the process? <br>
                    Find out more about what you <br>
                    <span>
                        will go through <br>
                        or scroll down and watch our costumer tour video.
                    </span>
                </p>
            </a>
            <div class="overlay"></div>
        </div>
        @include('layouts.elementos.redes')
</div>
@endsection



