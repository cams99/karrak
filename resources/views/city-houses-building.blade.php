@extends('layouts.app')
@section('title', 'City Houses Building')
@section('content')
<style>
    .background {
        background: #000000af;
    }
    footer {
        display: none !important;
    }
    .page4-4 .col-12 {
        margin-top: 180px;
    }
    .button-page4-4 a:hover {
        color: #FFF;
        background: #3598fe;
        text-decoration: none;
    }

    @media (max-width: 800px) {
        .page4-4 h2 {
            font-size: 40px;
        }
        .page4-4 button, .button-page4-4 a {
            font-size: 22px;
        }
    }
    @media (max-width: 475px) {
        .page4-4 .col-12 {
            min-height: 230px;
        }
        .button-page4-4 {
            width: 89%;
            margin-top: unset;
        }
        .page4-4 h2 {
            font-size: 36px;
        }
    }
    @media (max-width: 425px) {
        .page4-4 h2 {
            font-size: 30px;
        }
        .page4-4 .col-12 {
            min-height: 190px;
        }
        .page4-4 button, .button-page4-4 a {
            font-size: 18px;
        }
    }
    @media (max-width: 375px) {
        .page4-4 .col-12 {
            min-height: 220px;
        }
        .page4-4 button, .button-page4-4 a {
            padding: 5px 10px;
        }
    }
    @media (max-width: 375px) {
        .page4-4 button, .button-page4-4 a {
            font-size: 16px;
        }
    }

    /* Altura */
    @media (max-height: 850px) {
        body {
            overflow-y: scroll;
        }
    }
</style>
<div class="page4-4 row no-gutters fade-in">
    <div class="blur"></div>
    <div class="col-12">
        <h2 class="regular">
            <span>Already fall for one of our designs?</span>
            Find the information you need at our Get Started
        </h2>
    </div>
    <div class="button-page4-4">
        <div>
            <button class="light">Download the City Houses Brochure</button>
        </div>
        <div>
            <a href="{{ route('getacost') }}" class="light">Get a Cost Breakdown</a>
        </div>
    </div>
    @include('layouts.elementos.redes')
</div>
@endsection
