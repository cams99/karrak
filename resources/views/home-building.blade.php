@extends('layouts.app')
@section('title', 'House Building')
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
    img.logo, .nav-img, button.navbar-toggler img {
        filter: hue-rotate(0deg) brightness(40%);
    }
    .row.no-gutters.fade-in > .col-12 {
        margin-top: 220px;
    }
    .build-image {
        min-height: 500px;
    }
    .build-image-text a {
        color: #323945;
    }
    .build-image-text a:hover {
        color: #FFF;
        text-decoration: none;
    }
    .build-center .house {
        background: linear-gradient(#00000050, #00000050), url('../images/201909-KARRAK-P2.4-VIDEO.jpg') no-repeat;
        background-size: 100% 100%;
        height: 500px;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .col-3 {
        padding: 0 0 0 65px !important;
        overflow: hidden;
    }
    .col-3 img {
        width: 100%;
        height: 380px;
    }
    .col-3 h3 {
        text-align: end;
        font-weight: 600;
        margin-bottom: 17px;
        font-size: 34px;
    }
    .col-3 p {
        font-size: 22px;
        text-align: justify;
        margin: 20px 0;
    }
    .casa-2, .casa-1 {
        width: 100%;
        height: 380px;
        position: relative;
    }
    .casa-2 a, .casa-1 a {
        font-size: 25px;
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        bottom: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #FFF;
        opacity: 0;
        background: #00000050;
        transition: all .3s;
    }
    .casa-2 a:hover, .casa-1 a:hover {
        text-decoration: none;
        opacity: 1;
    }
    .casa-2 {
        background: url('../images/201909-KARRAK-P2.4-CASA2.jpg') no-repeat;
    }
    .casa-1 {
        background: url('../images/201909-KARRAK-P2.4-CASA1.jpg') no-repeat;
        background-position-x: right;
        background-size: 170% 100%;
    }

    @media (max-width: 1280px) {
        .col-3 h3 {
            font-size: 30px;
        }
    }
    @media (max-width: 960px) {
        body {
            overflow-y: scroll;
        }
        .build-center .house {
            display: none;
        }
        .col-3 {
            padding: 0 65px !important;
            max-width: 100%;
            flex-basis: 100%;
        }
        .casa-2, .casa-1 {
            background-size: 100% 100%;
        }
        .row.no-gutters.fade-in > .col-12 {
            margin-top: 180px;
        }
    }
    @media (max-width: 475px) {
        .col-3 p {
            font-size: 20px;
        }
        .col-3 {
            padding: 0 60px 0 30px !important;
        }
    }
    @media (max-width: 425px) {
        .col-3 {
            padding: 0 50px 0 30px !important;
        }
    }
    @media (max-width: 325px) {
        .build h1 {
            font-size: 24px;
        }
        .build-image-text h2 {
            font-size: 24px;
        }
        .build-image-text p {
            font-size: 17px;
        }
        .build-image-text button, .build-image-text a {
            font-size: 14px;
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
    <div class="col-12">
        <div class="row no-gutters build-center">
            <div class="col-6 house fade-in">
                <img src="{{asset('/images/201909-KARRAK-BUTTON-PLAY.png')}}" alt="Play-button">    
            </div>
            <div class="col-3">
                <div class="casa-2">
                    <a href="{{ route('features') }}">House Features</a>
                </div>
                <p>Find out more about how your home will come together at our Get Started page, or just watch our Customer Tour video.</p>
            </div>
            <div class="col-3">
                <h3>How do you build your sustainable home?</h3>
                <p>At Karrak Homes a diverse team from manufacturers to architects have come together to produce a high quality tested product and a unique service.</p>
                <div class="casa-1">
                    <a href="{{ route('features') }}">House Features</a>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.elementos.redes')
</div>
@endsection
