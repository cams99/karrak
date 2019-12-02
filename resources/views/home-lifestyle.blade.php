@extends('layouts.app')
@section('title', 'Houses Lifestyle')
@section('content')
<style>
    .background {
        background: #000000af;
    }
    footer {
        display: none !important;
    }
    .images .row {
        height: 35vh;
    }
    .build {
        margin-top: 130px;
        padding: 60px 0 0 10%;
        background: #00000050;
        height: 120px;
        text-align: start;
    }
    .build h1 {
        color: #FFF;
        font-size: 38px;
    }
    .carbon {
        justify-content: center;
        height: 38%;
    }
    .carbon h2 {
        font-size: 140px;
        color: #FFFFFF90;
        margin: 0;
    }
    .actions {
        height: 27%;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: flex-start;
        flex-direction: column;
        background: #00000050;
        color: #FFF;
        padding-left: 6%;
        position: absolute;
        bottom: 0;
    }
    .actions p {
        font-size: 20px;
        margin-bottom: 40px;
    }
    .actions h3 {
        font-size: 30px;
        padding-left: 6%;
    }
    .white-house {
        background: linear-gradient(#66666690, #66666690), url('../images/201909-KARRAK-p2.5-1.jpg') no-repeat;
        background-size: 103% 200%;
        background-position-x: center;
        background-position-y: 63%;
    }
    .stone-house {
        background: linear-gradient(#66666650, #66666650), url('../images/201909-KARRAK-p2.5-2.jpg') no-repeat;
        background-size: 100% 200%;
        background-position-y: 70%;
    }

    .white-house a:hover, .stone-house a:hover {
        text-decoration: none;
    }
    .white-house a h2, .stone-house a h2 {
        transition: all .3s;
        margin-bottom: 0;
    }
    .white-house a:hover h2, .stone-house a:hover h2 {
        color: #CC6600 !important; 
    }
    .main-body {
        height: 75vh;
        background: url('../images/coconut-trees-contemporary-daylight-1643389.jpg') no-repeat;
        background-size: 100%;
    }
    .images .row {
        height: 25vh;
    }

    @media (max-width: 1550px) {
        .main-body {
            background-size: 100% 100%;
        }
    }
    @media (max-width: 1024px) {
        .carbon h2 {
            font-size: 100px;
        }
    }
    @media (max-width: 800px) {
        .build {
            padding: 60px 0 0 0;
            text-align: center;
        }
        .carbon h2 {
            font-size: 80px;
        }
        .actions {
            padding: 0 60px 0 30px;
        }
        .build h1 {
            font-size: 33px;
        }
        .carbon h2 {
            text-align: center;
        }
    }
    @media (max-width: 600px) {
        .build {
            margin-top: 130px;
            padding: 10px;
        }
    }
    @media (max-width: 475px) {
        .actions {
            min-height: 150px;
            padding: 0px 40px 0 30px;
        }
        .carbon {
           height: 160px;
        }
        .carbon h2 {
            font-size: 60px;
        }
        .actions p {
            font-size: 16px;
            margin-bottom: 10px;
        }
        .actions h3 {
            font-size: 25px;
        }
        .white-house, .stone-house {
            max-width: 100%;
            flex-basis: 100%;
        }
        .images h2 {
            font-size: 27px;
        }
        .carbon {
            padding: 0 60px 0 20px !important;
        }
    }
    @media (max-width: 325px) {
        .carbon {
            justify-content: center;
            height: 30%;
        }
        .build h1 {
            font-size: 28px;
        }
        .actions {
            min-height: 200px;
        }
    }

    /* Altura */
    @media (max-height: 800px) {
        body {
            overflow-y: scroll;
        }
        .actions {
            position: relative;
        }
        .main-body {
            min-height: 600px;
        }
        .images .row {
            min-height: 200px;
        }
    }
</style>
<div class="page4-5 row no-gutters fade-in">
    <div class="col-12 main-body">
        <div class="build">
            <h1 class="semibold">
                Why you choose a sustainable lifestyle?
            </h1>
        </div>
        <div class="col-12 carbon fade-in">
            <h2 class="bold">GREEN PROJECT</h2>
        </div>
        <div class="col-12 actions fade-in">
            <p class="light">Our iconic Australian black cockatoo is on the bridge of extinction, be part of a local conservation center, Kaarakin, save a black cockatoo for XXX.</p>
            <h3 class="light">Actions with an impact.</h3>
        </div>
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
                        Follow our Blog.
                    </h2>
                </a>
            </div>
        </div>
    </div>
    @include('layouts.elementos.redes')
</div>
@endsection
