@extends('layouts.app')
@section('title', 'Get Started')
@section('content')
<style>
    .background {
        background: #000000af;
    }
    footer {
        display: none !important;
    }
    .play-button {
        width: 10% !important;
        position: absolute;
        left: 51%;
        top: 40%;
        transform: translate(-50%, -50%);
    }

    @media (max-width: 1440px) {
        .col-49 div {
            width: 80%;
        }
    }
    @media (max-width: 1024px) {
        .col-45 h2 {
            font-size: 30px;
        }
        .col-49 h2 {
            font-size: 36px;
            margin-bottom: 30px;
        }
        .col-49 p {
            font-size: 18px;
        }
        .page6-1 button {
            padding: 10px 20px;
            font-size: 18px;
        }
    }
    @media (max-width: 475px) {
        .col-49 {
            width: 100%;
        }
        .page6-1 {
            padding: 250px 60px 0 8%;
        }
        .col-49 div {
            width: 100%;
        }
        .col-45 {
            width: 100%;
            margin-left: unset;
            height: 400px;
        }
        .col-45 div {
            height: 50%;
            margin: 40px 0 30px 0;
        }
        .page6-1 {
            padding: 180px 60px 0 8%;
        }
    }

    /* Altura */
    @media (max-height: 850px) {
        body {
            overflow-y: scroll;
        }
        .page6-1 {
            height: 100%;
        }
    }
</style>
<div class="page6-1 row no-gutters fade-in">
    <div class="col-49 fade-in">
        <h2 class="semibold">How is your pre-building process?</h2>
        <div>
            <p class="regular">
                Once you have contacted us and decided to purchase one of our homes, pre-building process will usually take an estimate of XX days. Our team will guide you through the Council approval process and our manufacturers will provide with the assemble units according to the highest environmental standards. These technologies include numerical controlled machinery, robotic assembly, building information models, rapid prototyping, assembly lines, test systems and fixing systems reducing construction errors up to 97%. Take a look at the info graphic we have prepared for you.
            </p>
            <button>View your Green Features</button>
        </div>
    </div>
    <div class="col-45 fade-in">
        <div> 
            <img class="play-button" src="{{asset('/images/201907-KARRAK-botonplay.png')}}" alt="Play">
        </div>
        <h2 class="semibold">How is our building process?</h2>
    </div>
    @include('layouts.elementos.redes')
</div>
@endsection
