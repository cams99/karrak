@extends('layouts.app')
@section('title', 'Contact Us')
@section('content')
<style>
    .background {
        background: #000000af;
    }
    footer {
        display: none !important;
    }
    .form {
        margin-top: 130px !important;
    }
    @media (max-width: 600px) {
        body {
            overflow-y: scroll;
        }
        .page9-1 > .col-6 {
            max-width: 100%;
            flex-basis: 100%;
            padding-right: 0 !important;
        }
        .form {
            margin-top: 20px !important;
        }
        .page9-1 {
            height: 100%;
        }
        form {
            margin-bottom: 0%;
        }
        .form h2 {
            text-align: center;
            margin: 0 0 20px 0;
        }
        .gmap_canvas {
            height: 250px;
        }
        .page9-1 > .col-6 {
            margin-top: 160px;
        }
        .form > p {
            padding: 0 10px;
        }
        .form > p br {
            display: none;
        }
    }
    @media (max-width: 475px) {
        .form h2 {
            font-size: 40px;
        }
    }
    
</style>
<div class="page9-1 row no-gutters fade-in">
    <div class="col-6 map fade-in">
        <div class="gmap_canvas">
            <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=university%20of%20san%20francisco&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        </div>
        <div class="info-map">
            <h3 class="semibold">KARRAK HOMES</h3>
            <p><i class="fas fa-map-marker-alt"></i> Address</p>
            <p><img src="{{asset('/images/auricular-phone-symbol-in-a-circle.png')}}" alt="Phone" /> Phone Number</p>
            <p><img src="{{asset('/images/email.png')}}" alt="Email" /> Email</p>
            <p><i class="fab fa-skype"></i> Skype Username</p>
        </div>
    </div>
    <div class="col-6 form fade-in">
        <h2 class="semibold">Get in touch with us</h2>
        <form class="light" action="">
            <input type="text" name="Address" placeholder="Address">
            <input type="text" name="Phone Number" placeholder="Phone Number">
            <input type="text" name="Email" placeholder="Email">
            <input type="text" name="Skype Username" placeholder="Skype Username">
            <input type="submit" value="SUBMIT">
        </form>
        <p class="regular">
            Although Karrak Homes builds in most areas of Australia, contact us and we will<br>
            let you know if building can be done on your site.
        </p>
    </div>
    @include('layouts.elementos.redes')
</div>
@endsection

