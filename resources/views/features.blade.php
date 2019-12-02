@extends('layouts.app')
@section('title', 'Features')
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
        margin-top: 22vh;
        height: 78vh;
    }
    .build-center .house {
        background: url('../images/5d274b9ceda0b.png') no-repeat;
        background-size: 100% 75%;
        background-position-y: 55%;
        height: 100%;
        max-width: 55%;
        flex: 0 0 55%;
    }
    .build-right {
        margin-left: unset;
        width: 45%;
    }
    .build-text {
        width: 94%;
        text-align: center;
        color: #323945;
    }
    .build-text h2 {
        font-size: 50px;
        margin-bottom: 9%;
    }
    .build-text h3 {
        font-size: 36px;
        margin-bottom: 8%;
    }
    .build-text button {
        display: block;
        background: transparent;
        border: 4px solid #3598fe;
        border-radius: 10px;
        margin: auto;
        transition: all .5s;
        font-size: 23px;
        padding: 10px 20px;
        color: #666;
    }
    .build-text button:hover {
        background: #3598fe;
        color: #FFF;
    }

    @media (max-width: 1024px) {
        .build-text h2 {
            font-size: 40px;
        }
        .build-text h3 {
            font-size: 26px;
        }
        .build-text button {
            font-size: 18px;
        }
    }
    @media (max-width: 800px) {
        .build-text button {
            padding: 5px 5px;
        }
    }

    @media (max-width: 475px) {
        body {
            overflow-y: scroll;
        }
        .build-center .house {
            background-size: 100% 100%;
            height: 350px;
            max-height: unset;
            max-width: 100%;
            flex: 0 0 100%;
            margin-bottom: 20px;
        }
        .page6-4 .build-center {
            margin-top: 180px;
        }
        .build-right {
            margin-left: unset;
            width: 100%;
        }
        .build-text {
            width: 100%;
        }
        .build-text h2, .build-text h3, .build-text button {
            margin-bottom: 20px;
        }
    }
    @media (max-width: 32   5px) {
        .build-text h3 {
            font-size: 23px;
        }
    }

    /* Altura */
    @media (max-height: 1024px) {
        .build-text p {
            margin-bottom: 15px;
        }
        .build-text h2 {
            margin-bottom: 15px;
        }
    }
    @media (max-height: 760px) {
        .page6-4 .build-center {
            margin-top: 180px;
        }
    }
    @media (max-height: 550px) {
        body {
            overflow-y: scroll;
        }
    }
</style>
<div class="page6-4 row no-gutters fade-in">
    <div class="col-12">
        <div class="row no-gutters build-center">
            <div class="house fade-in"></div>
            <div class="build-right fade-in">
                <div class="build-text">
                    <h2 class="semibold">Green feature</h2>
                    <h3>
                        Do you want to know more<br>
                        about our green features?
                    </h3>
                    <button>DOWNLOAD GREEN BROOKLET</button>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.elementos.redes')
</div>
@endsection
