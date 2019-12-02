@extends('layouts.app')
@section('title', 'House Design')
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
    }
    .main h2 {
        font-size: 90px;
        margin: 190px 0 0 10%;
        text-shadow: 0 2px 4px black;
    }
    .carousel-item img {
        filter: brightness(90%);
    }
    .carousel-indicators {
        bottom: 120px;
        transition: all 1s;
    }
    .carousel-indicators li {
        transition: all .6s ease;
    }
    .carousel-indicators .active {
        background-color: #CC6600;
    }
    .dropdown {
        font-size: 25px;
        width: 100%;
    }
    .dropdown > * {
        display: inline-block;
        margin: 0;
    }
    .dropdown button {
        width: 10%;
        background: #00000050;
        border: none;
        color: #FFF;
    }
    .dropdown p {
        width: 90%;
        background: #00000020;
        text-align: center;
        cursor: pointer;
    }
    .dropdown p i {
        color: #CC6600;
        margin-left: 10px;
    }   
    .menu-dropdown {
        min-height: 360px;
        width: 100%;
        background: #00000010;
        margin-top: -1000px;
        transition: all .8s;
        padding: 10px 20px;
        font-size: 24px;
    }
    .menu-dropdown p .dimensions {
        display: block;
        margin-left: 30px;
    }   
    .menu-dropdown p img {
        width: 70px;
        height: 60px;
        position: relative;
        margin: 0 10px 0 30px;
    }
    .menu-dropdown p:nth-child(3),
    .menu-dropdown p:nth-child(4) {
        font-size: 35px;
    }
    .menu-dropdown p .color {
        color: #CC6600;
        font-size: 40px;
    }
    .bottom {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 130px;
        color: #FFF;
        background: #00000020;
        display: flex;
        justify-content: flex-end;
        align-items: center;
        padding-right: 40px;
    }
    .bottom a {
        display: inline-block;
        background: #FFFFFF40;
        border: 4px solid #3598fe;
        border-radius: 10px;
        transition: all .5s;
        font-size: 21px;
        padding: 10px 30px;
        color: #FFF;
        margin-right: 40px;
    }
    .bottom a:hover {
        background: #3598fe;
        text-decoration: none;
    }
    .cost-breakdown {
        border: 4px solid #CC6600 !important;
    }
    .cost-breakdown:hover {
        background: #CC6600 !important;
    }
    .menu-drop {
        text-align: start;
        position: absolute;
        top: 320px;
        left: 10%;
        width: 24%;
        min-width: 350px;
        flex-wrap: wrap;
        overflow: hidden;
    }
    .menu-out {
        margin-top: 0;
    }
    .right-button, .left-button {
        position: absolute;
        font-size: 50px;
        color: #FFF;
    }
    .right-button {
        top: 50%;
        right: 7%;
    }
    .right-button img {
        transform: rotate(180deg);
    }
    .left-button {
        top: 50%;
        left: 5%;
    }
    .carousel-control-next:focus, .carousel-control-next:hover, .carousel-control-prev:focus, .carousel-control-prev:hover {
        opacity: unset;
    }
    .carousel-control-next, .carousel-control-prev {
        opacity: unset;
    }
    .houses {
        position: absolute;
        top: 150px;
        right: 0;
        width: 46%;
        background: #00000020;
        padding: 5px 0;
        min-width: 690px;
    }
    .houses a {
        color: #FFF;
        font-size: 28px;
        margin: 0 40px;
        transition: all .6s;
    }
    a.active {
        color: #CC6600;
    }

    @media (max-width: 800px) {
        .bottom {
            padding-right: 0;
            justify-content: center;
        }
        .bottom a {
            padding: 5px 10px;
            margin-right: 10px;
            font-size: 18px;
        }
        .menu-dropdown p {
            font-size: 18px;
        }
        .menu-dropdown p img {
            width: 40px;
            height: 30px;
        }
        .menu-dropdown p:nth-child(3), .menu-dropdown p:nth-child(4) {
            font-size: 20px;
        }
        .menu-dropdown p .color {
            font-size: 25px;
        }
        .menu-dropdown {
            min-height: 260px;
        }
    }
    @media (max-width: 600px) {
        .houses a {
            font-size: 20px;
            min-width: 560px;
        }
        .bottom a {
            text-align: center;
        }
        .main h2 {
            font-size: 60px;
            margin: 215px 0 0 10%;
        }
    }
    @media (max-width: 475px) {
        .houses {
            min-width: 410px;
        }
        .houses a {
            margin: 0 10px;
        }
        .right-button {
            right: 80px;
        }
        .dropdown {
            font-size: 20px;
        }
        .menu-drop {
            min-width: 270px;
        }
    }
    @media (max-width: 425px) {
        .right-button {
            right: 70px;
        }
        .houses {
            min-width: 350px;
        }
        .houses a {
            font-size: 17px;
        }
        .main h2 {
            font-size: 40px;
        }
        .menu-drop {
            top: 290px;
        }
        .bottom a {
            font-size: 15px;
        }
        .right-button, .left-button, .menu-drop {
            display: none;
        }
    }
    @media (max-width: 325px) {
        .houses {
            min-width: 310px;
        }
        .houses a {
            margin: 0 5px;
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
        <div class="carousel-item active" data-interval="500000000">
            <img src="{{asset('/images/201907-KARRAK-Fondo-5.jpg')}}" alt="House">
            <div class="main slide1">
                <h2 class="bold">Aspen White</h2>
                <div class="menu-drop">
                    <div class="dropdown">
                        <button><i class="fas fa-chevron-down"></i></button><p>House Description <i class="fas fa-home"></i></p>
                    </div>
                    <div class="menu-dropdown">
                        <p>
                            - <span class="semibold">House Dimension</span>
                            <span class="dimensions">120 mt x 125 mt.</span>
                        </p>
                        <p>
                            - <span class="semibold">Total living area</span>
                            <span class="dimensions">80 mt wide by 90 mt long.</span>
                        </p>
                        <p class="light">
                            <img src="{{asset('/images/bed.png')}}" alt="Bed"> x <span class="color semibold">3</span>
                        </p>
                        <p class="light">
                        <img src="{{asset('/images/bathtub.png')}}" alt="Bathtub"> x <span class="color semibold">5</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item" data-interval="5000">
        <img src="{{asset('/images/201907-KARRAK-Fondo-5.jpg')}}" alt="House">
            <div class="main slide1">
                <h2 class="bold">Leonore</h2>
                <div class="menu-drop">
                    <div class="dropdown">
                        <button><i class="fas fa-chevron-down"></i></button><p>House Description <i class="fas fa-home"></i></p>
                    </div>
                    <div class="menu-dropdown">
                        <p>
                            - <span class="semibold">House Dimension</span>
                            <span class="dimensions">120 mt x 125 mt.</span>
                        </p>
                        <p>
                            - <span class="semibold">Total living area</span>
                            <span class="dimensions">80 mt wide by 90 mt long.</span>
                        </p>
                        <p class="light">
                            <img src="{{asset('/images/bed.png')}}" alt="Bed"> x <span class="color semibold">3</span>
                        </p>
                        <p class="light">
                        <img src="{{asset('/images/bathtub.png')}}" alt="Bathtub"> x <span class="color semibold">5</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item" data-interval="5000">
        <img src="{{asset('/images/201907-KARRAK-Fondo-5.jpg')}}" alt="House">
            <div class="main slide1">
                <h2 class="bold">Whistle Stop</h2>
                <div class="menu-drop">
                    <div class="dropdown">
                        <button><i class="fas fa-chevron-down"></i></button><p>House Description <i class="fas fa-home"></i></p>
                    </div>
                    <div class="menu-dropdown">
                        <p>
                            - <span class="semibold">House Dimension</span>
                            <span class="dimensions">120 mt x 125 mt.</span>
                        </p>
                        <p>
                            - <span class="semibold">Total living area</span>
                            <span class="dimensions">80 mt wide by 90 mt long.</span>
                        </p>
                        <p class="light">
                            <img src="{{asset('/images/bed.png')}}" alt="Bed"> x <span class="color semibold">3</span>
                        </p>
                        <p class="light">
                        <img src="{{asset('/images/bathtub.png')}}" alt="Bathtub"> x <span class="color semibold">5</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom">
        <a href="{{ route('getacost') }}" class="cost-breakdown">GET A COST BREAKDOWN</a>
        <a href="" class="download">DOWNLOAD THE CITY HOUSES BROCHURE</a>
    </div>
    <div class="left-button">
        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
            <img src="{{asset('/images/scroll.png')}}" alt="Scroll">
            <span class="sr-only">Previous</span>
        </a>
    </div>
    <div class="right-button">
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <img src="{{asset('/images/scroll.png')}}" alt="Scroll">
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="houses">
        <a href="" class="active">Aspen White</a>
        <a href="">Leonore</a>
        <a href="">Whistle Stop</a>
    </div>
    @include('layouts.elementos.redes')
</div>
@endsection

