@extends('layouts.app')
@section('title', 'City Houses')
@section('content')
<style>
    .background {
        background: #000000af;
    }
    footer {
        display: none !important;
    }
    .main {
        position: absolute;
        z-index: 1;
        height: 84vh;
        width: 100vw;
        color: #FFF;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .main h2 {
        font-size: 56px;
    }
    .carousel-item img {
        filter: brightness(66%);
    }
    .bottom-button {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        color: #FFF;
        text-align: center;
    }
    .bottom-button > div:nth-child(1) {
        background: #CC660035;
        padding: 50px 0;
        max-height: 180px;
        display: none;
        margin-bottom: -15%;
        transition: all 1s;
    }
    .bottom-button div:nth-child(1) > * {
        margin: 0;
    }
    .bottom-button h3 {
        font-size: 2rem;
        margin-bottom: 10px !important;
    }
    .bottom-button h4 {
        font-style: italic;
    }
    .bottom-button > div:nth-child(2) {
        background: #66666699;
        padding: 15px 0;
        max-height: 110px;  
    }
    .button {
        background: url("../images/play-button-1.png") no-repeat;
        background-size: 100% 100%;
        width: 80px;
        height: 80px;   
        margin: auto;
        transform: rotate(-90deg);
        cursor: pointer;
        clip-path: polygon(89% 50%, 13% -3%, 13% 103%);
        transition: all 1s;
    }
    .carousel-indicators {
        bottom: 100px;
        transition: all 1s;
    }
    .carousel-indicators li {
        transition: all .6s ease;
    }
    .carousel-indicators .active {
        background-color: #CC6600;
    }
    .bottom {
        bottom: 275px;
    }
    .rotate {
        transform: rotate(90deg);
    }
    .animation {
        display: block !important;
        margin-bottom: 0 !important; 
    }
    .opacity-0 {
        opacity: 0;
    }

    @media (max-width: 475px) {
        .main h2 {
            font-size: 40px;
        }
        .bottom-button > div:nth-child(1) {
            padding: 25px 0;
        }
        .bottom-button h3 {
            font-size: 1.5rem;
        }
        .bottom-button h4 {
            font-size: 1rem;
        }
        .bottom {
            bottom: 225px;
        }
    }
    @media (max-width: 375px) {
        .bottom-button h3 {
            font-size: 1.3rem;
        }
        .bottom-button h4 {
            font-size: 1rem;
        }
    }
    @media (max-width: 325px) {
        .bottom {
            bottom: 240px;
        }
    }

</style>
<div id="carousel" class="carousel slide fade-in" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active" data-interval="5000">
            <img src="{{asset('/images/201907-KARRAK-P4.1.jpg')}}" alt="House">
            <div class="main slide1">
                <h2 class="semibold">Watch the video</h2>
            </div>
        </div>
        <div class="carousel-item" data-interval="5000">
            <img src="{{asset('/images/201907-KARRAK-P4.1.jpg')}}" alt="House">
            <div class="main slide2">
                <h2 class="semibold">Watch the video</h2> 
            </div>
        </div>
        <div class="carousel-item" data-interval="5000">
            <img src="{{asset('/images/201907-KARRAK-P4.1.jpg')}}" alt="House">
            <div class="main slide3">
                <h2 class="semibold">Watch the video</h2>
            </div>
        </div>
    </div>
    <div class="bottom-button">
        <div>
            <h3 class="regular">Karrak Homes follow the world.</h3>
            <h4 class="light">Cutting edge designed and equipped to be part of an environmentally contentius world. Your home.</h4>
        </div>
        <div>
            <div class="button"></div>
        </div>
    </div>
    @include('layouts.elementos.redes')
</div>

@endsection

