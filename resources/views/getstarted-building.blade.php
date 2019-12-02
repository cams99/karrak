@extends('layouts.app')
@section('title', 'Get Started Building')
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
    .page6-2 .build-center {
        margin-top: 23vh;
        height: 77vh;
    }
    .page6-2 .col {
        height: 80%;
    } 
    .build-center .house {
        background: unset;
        background-size: 100% 100%;
        max-width: 40%;
        padding: 0 5% 3% 3%;
        display: none;
    }
    .build-center .house img {
        width: 100%;
        height: 100%;
    }
    .build-right {
        margin-left: unset;
        display: none;
    }
    .build-text {
        text-align: end;
        color: #323945;
        margin: 0 12% 0 18%;
    }
    .build-text h2 {
        font-size: 44px;
        margin-bottom: 70px;
    }
    .build-text h3 {
        font-size: 32px;
        margin-bottom: 60px;
    }
    .build-text p {
        font-size: 21px;
        font-style: unset;
        letter-spacing: unset;
        text-align: start;
        padding: 0;
        text-align: justify;
        margin-bottom: 60px;
    }
    .build-text p span {
        color: #CC6600;
    }
    .build-center .col-12 {
        height: 20%;
        background: #66666640;
        display: none;
        align-items: center;
    }
    .build-text p:nth-child(5) {
        font-style: italic;
        margin: 0;
    }
    .build-text h3:nth-child(4) {
        font-size: 28px;
        letter-spacing: -1px;
    }
    .build-center .col-12 h2 {
        margin-left: 3%;
        font-size: 44px;
        color: #FFF;
    }
    .build-center .col-12 a {
        background: transparent;
        color: #000;
        font-size: 20px;
        letter-spacing: -0.2px;
        border: 3.5px solid #3598fe;
        border-radius: 10px;
        transition: all .5s;
        margin: 0 7% 0 auto;
        padding: 7px 20px;
    }
    .build-center .col-12 a:hover {
        background: #3598fe;
        color: #FFF;
        text-decoration: none;
    }
    .page6-2 .col {
        min-height: 500px;
    }
    .build-center .col-12 {
        min-height: 160px;
    }

    @media (max-width: 1440px) {
        .build-text {
            margin: 0 12% 0;
        }
    }
    @media (max-width: 1280px) {
        .build-text {
            margin: 0 12% 0 0;
        }
    }
    @media (max-width: 1024px) {
        .build-text h2 {
            font-size: 39px;
        }
        .build-text h3 {
            font-size: 27px;
        }
        .build-text h3:nth-child(4) {
            font-size: 23px;
        }
        .build-text p {
            font-size: 18px;
        }
        .build-center .col-12 h2 {
            font-size: 39px;
        }
    }
    @media (max-width: 800px) {
        .build-center .col-12 h2 {
            font-size: 31px;
        }
        .build-center .col-12 a {
            font-size: 18px;
        }
    }
    @media (max-width: 720px) {
        .build-text h2 {
            font-size: 34px;
        }
        .build-text h3 {
            font-size: 25px;
        }
        .build-text h3:nth-child(4) {
            font-size: 20px;
        }
        .build-text p {
            font-size: 16px;
        }
        .build-text {
            margin: 0 60px 0 0;
        }
    }
    @media (max-width: 475px) {
        .build-center .house {
            max-width: 100%;
            flex-basis: 100%;
            padding: 0 3% 3%;
        }
        .page6-2 .build-center {
            margin-top: 180px;
        }
        .build-text {
            margin: 0 30px 0 30px;
        }
        .build-center .col-12 h2 {
            font-size: 27px;
        }
        .page6-2 .col {
            height: unset;
        }
        .build-text p:nth-child(5) {
            margin-bottom: 20px;
        }
        .build-center .col-12 a {
            width: 50%;
        }
    }

    /* Altura */
    @media (max-height: 1000px) {
       .build-text h2, .build-text p {
            margin-bottom: 35px;
        }
        .build-text h3 {
            margin-bottom: 30px;
        }
    }
    @media (max-height: 850px) {
        body {
            overflow-y: scroll;
        }
        .page6-2 .build-center {
            margin-top: 200px;
        }
    }
</style>
<div class="page6-2 row no-gutters fade-in">
    <div class="col-12">
        <div class="row no-gutters build-center">
            <div class="col house fade-in">
                <img src="{{asset('/images/20907-KARRAK-imagen-P6,2.jpg')}}" alt="" />
            </div>
            <div class="col build-right fade-in">
                <div class="build-text">
                    <h2 class="semibold">How is your building process?</h2>
                    <h3 class="semibold">Let's talk about Building</h3>
                    <p>
                        Our panel houses use the required technologies for an efficient and effective construction, reducing error construction on site up to XX%, achieving sustainability and a higher quality than buildings fully constructed on-site <span>(more accurate info to be provided by manufacturer)</span> Let ́s take a look at our how-to video.
                    </p>
                    <h3 class="semibold">Did you find the information you were looking for?</h3>
                    <p>
                        If you didn’t or if you want to know more, ask us a question and we will be happy to answer you.
                    </p>
                    
                </div>
            </div>
            <div class="col-12 fade-in">
                <h2 class="semibold">Think about your financial goals?</h2>
                <a href="{{ route('contact') }}">Contact Us</a>
            </div>
        </div>
    </div>
    @include('layouts.elementos.redes')
</div>
@endsection
