@extends('layouts.app')
@section('title', 'Get Started Finance')
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
    .page6-3 .build-center {
        margin-top: 23vh;
        height: 77vh;
    }
    .page6-3 .col {
        height: 80%;
        max-width: 55%
    } 
    .build-center .house {
        background: unset;
        background-size: 100% 100%;
        max-width: 45%;
        padding: 0 0% 3% 0%;
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
        text-align: start;
        color: #323945;
        margin: 0 11% 0 15%;
    }
    .build-text h2 {
        font-size: 44px;
        margin-bottom: 25px;
    }
    .build-text p {
        font-size: 20px;
        font-style: unset;
        letter-spacing: unset;
        padding: 0;
        text-align: justify;
        margin-bottom: 40px;
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
    .build-center .col-12 h2 {
        font-size: 44px;
        color: #FFF;
        margin: 0px 7% 0 auto;
    }
    .page6-3 .col {
        min-height: 620px;
    }

    @media (max-width: 1280px) {
        .build-text h2 {
            font-size: 40px;
        }
        .build-text p {
            font-size: 18px;
        }       
    }
    @media (max-width: 1024px) {
        .build-text {
            margin: 0 6% 0 8%;
        }
    }
    @media (max-width: 800px) {
       .page6-3 .col {
            min-height: 770px;
        }
        .build-text h2 {
            font-size: 36px;
        }
        .build-text p {
            font-size: 16px;
        }
    }
    @media (max-width: 600px) {
        .page6-3 .col {
            min-height: 800px;
        }
    }
    @media (max-width: 475px) {
        .page6-3 .col {
            min-height: unset;
            height: unset;
            max-width: 100%;
            flex-basis: 100%;
        }
        .build-text {
            margin: 0 60px 0 40px;
        }
        .build-center .col-12 h2 {
            font-size: 35px;
            margin: auto;
        }
        .build-center .house {
            padding: 0 3% 3%;
        }
    }
    @media (max-width: 325px) {
        .build-text h2 {
            font-size: 33px;
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
    @media (max-height: 850px) {
        body {
            overflow-y: scroll;
        }
        .page6-3 .build-center {
            margin-top: 200px;
        }
    }
</style>
<div class="page6-3 row no-gutters fade-in">
    <div class="col-12">
        <div class="row no-gutters build-center">
            <div class="col build-right fade-in">
                <div class="build-text">
                    <h2 class="semibold">Think about your financial goals</h2>
                    <p>
                        Invest smart. One of the main concerns of every property buyer should be its finances and getting the most out of your investment. Karrak Homes offers high design and sustainability. Thanks to our prefab building process, where home panels and XXXX are delivered to you, you can rest assure that your investment is been taken care off with short assemble time, taking only up to 4 days building on site. The end result will be a polished product, completely tested, architect designed and certified to industry standards, with no extra cost for your specifications.
                    </p>
                    <p>
                        Financing Assistance. If you are looking for financing assistance, our representative will provide you a couple of options that go from brokers to banks that you can look into. Getting financial aid is a process that can be time consuming, so our goal is to provide you with the means to carry on a smooth process and the right option for your investment.
                    </p>
                    
                </div>
            </div>
            <div class="col house fade-in">
                <img src="{{asset('/images/20907-KARRAK-Cafe-6,3.jpg')}}" alt="" />
            </div>
            <div class="col-12 fade-in">
                <h2 class="semibold">Life after building</h2>
            </div>
        </div>
    </div>
    @include('layouts.elementos.redes')
</div>
@endsection
