@extends('layouts.app')
@section('title', 'Houses')
@section('content')
<style>
    .background {
        background: #000000af;
    }
    footer {
        display: none !important;
    }
</style>
<div id="carousel" class="carousel slide fade-in" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
        <li data-target="#carousel" data-slide-to="3"></li>
        <li data-target="#carousel" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active" data-interval="5000">
            <img src="{{asset('/images/Casa-yourhome.jpg')}}" alt="House">
            <div class="main slide1" class="row">
                <div class="col-12 caja-titulo">
                    <h1 class="extrabold">
                        Towards zero carbon footprint. <br>
                        <span class="text extrabold">Your life, your values, our expertise.</span>
                    </h1>
                </div>
                <div class="col-12 caja-titulo2 margin90">
                    <h2 class="text extrabold">Download our Green Features Brochure.</h2>
                </div>
            </div>
        </div>
        <div class="carousel-item" data-interval="5000">
            <img src="{{asset('/images/Casa-yourhome.jpg')}}" alt="House">
            <div class="main slide2" class="row">
                <div class="col-12 caja-titulo">
                    <h1 class="extrabold"> 
                        Your Home, <br>
                        <span class="text extrabold">a lifestyle, the future.</span>
                    </h1>
                </div>
                <div class="col-12 caja-titulo2 margin90">
                    <h2 class="text extrabold">Your vision is our goal</h2>
                </div>
            </div>
        </div>
        <div class="carousel-item" data-interval="5000">
            <img src="{{asset('/images/Casa-yourhome.jpg')}}" alt="House">
            <div class="main slide3" class="row">
                <div class="col-12 caja-titulo">
                    <h1 class="extrabold"> 
                        Clearand transparent. <br>
                        <span class="text extrabold">First step is awareness, second informed choice.</span>
                    </h1>
                </div>
                <div class="col-12 caja-titulo2">
                    <h2 class="text1 extrabold">
                        Karrak Homes gives you the information <br>
                        you need to make good decisions
                    </h2>
                </div>
            </div>
        </div>
        <div class="carousel-item" data-interval="5000">
            <img src="{{asset('/images/Casa-yourhome.jpg')}}" alt="House">
            <div class="main slide4" class="row">
                <div class="col-12 caja-titulo">
                    <h1 class="extrabold"> 
                        Tailored to your site. <br>
                        <span class="text extrabold">Every project is different.</span>
                    </h1>
                </div>
                <div class="col-12 caja-titulo2 margin90">
                    <h2 class="text2 extrabold">Your home sits within a microclimate and streetscape.</h2>
                </div>
            </div>
        </div>
        <div class="carousel-item" data-interval="5000">
            <img src="{{asset('/images/Casa-yourhome.jpg')}}" alt="House">
            <div class="main slide5" class="row">
                <div class="col-12 caja-titulo">
                    <h1 class="extrabold"> 
                        Every journey begins with a simple step. <br>
                        <span class="text extrabold">Take the step.</span>
                    </h1>
                </div>
                <div class="col-12 caja-titulo2">
                    <h2 class="text3 extrabold">Watch our video!</h2>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.elementos.redes')
</div>

@endsection

