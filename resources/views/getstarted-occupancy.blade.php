@extends('layouts.app')
@section('title', 'Get Started Occupancy and Support')
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
    img.logo, .nav-img, button.navbar-toggler {
        filter: hue-rotate(0deg) brightness(40%);
    }
    .page6-4 .build-center {
        margin-top: 23vh;
        height: 77vh;
    }
    .build-center .house {
        background: url('../images/20907-KARRAK-Cocina-6,4.jpg') no-repeat;
        background-size: 100% 100%;
        height: 100%;
        max-width: 50%;
    }
    .build-right {
        margin-left: unset;
    }
    .build-text {
        width: 86%;
        text-align: end;
        color: #323945;
    }
    .build-text h2 {
        font-size: 50px;
        margin-bottom: 9%;
    }
    .build-text h3 {
        font-size: 42px;
        margin-bottom: 8%;
    }
    .build-text h4 {
        font-size: 32px;
    }

    @media (max-width: 1280px) {
        .build-text h2 {
            font-size: 40px;
        }
        .build-text h3 {
            font-size: 32px;
        }
        .build-text h4 {
            font-size: 27px;
        }
    }
    @media (max-width: 960px) {
        .build-text h2 {
            font-size: 35px;
        }
        .build-text h3 {
            font-size: 27px;
        }
        .build-text h4 {
            font-size: 24px;
        }
    }
    @media (max-width: 475px) {
        .build-center .house {
            height: 60%;
            max-width: 100%;
            flex-basis: 100%;
        }
        .page6-4 .build-center {
            margin-top: 180px;
        }
        .page6-4 .build-right {
            max-width: 100%;
            flex-basis: 100%;
        }
        .build-text {
            width: unset;
        }
        .build-text {
            width: unset;
            margin: 0 19px;
        }
    }
</style>
<div class="page6-4 row no-gutters fade-in">
    <div class="col-12">
        <div class="row no-gutters build-center">
            <div class="col-6 house fade-in"></div>
            <div class="col-6 build-right fade-in">
                <div class="build-text">
                    <h2 class="semibold">Your life after building</h2>
                    <h3 class="semibold">Think about your financial goals</h3>
                    <h4 class="semibold">Support Information</h4>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.elementos.redes')
</div>
@endsection
