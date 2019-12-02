@extends('layouts.app')
@section('title', 'Get a Cost')
@section('content')
<style>
    .background {
        background: #000000af;
    }
    footer {
        display: none !important;
    }
    .page9-1 {
        background: linear-gradient(#00000030, #00000030), url('../images/201907-KARRAK-ASSEtT-Fondo-8.jpg') no-repeat;
        background-size: 100% 100%;
    }
    .form-contact > * {
        margin-right: 6%;
    }
    .form-contact h2 {
        margin: 220px 7% 6% 0;
        font-size: 50px;
        color: #FFF;
        text-align: end;
    }
    .form-contact .row h3 {
        color: #FFF;
        font-size: 30px;
        margin-bottom: 20px;
    }
    .form-contact .row form {
        background: #FFFFFF99;
        padding: 35px 30px;
    }
    .form-contact .row form p {
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 5px !important;
    }
    .form-contact .row form p > * {
        font-size: 20px;
        margin: 0;
    }
    form input[type="submit"] {
        margin: 15px 13px 0px auto !important;
        width: 30%;
        height: 45px;
    }
    form input[type="text"] {
        border-radius: 5px;
        border: none;
        height: 45px;
        padding: 0 10px;
        width: 55%;
    }
    .col-5 form input[type="text"] {
        width: 70%;
    }
    .form-contact .row .col-5 form {
        padding: 40px 35px;
    }
    .col-5 form input[type="submit"] {
        margin: 50px 13px 0px auto !important;
    }
    .formulario-price {
        display: none;
    }
    .formulario-contact {
        display: none;
    }

    @media (max-width: 960px) {
        body {
            overflow-y: scroll;
        }
        .formulario-price, .formulario-contact {
            max-width: 91%;
            flex-basis: 91%;
        }
        .page9-1 {
            height: 100%;
        }
        form {
            margin-bottom: 40px;
        }
    }
    @media (max-width: 475px) {
        .form-contact h2 {
            margin: 220px 60px 6% 0;
            font-size: 40px;
        }
        .form-contact .row form p {
            flex-wrap: wrap;
            margin-bottom: 0px !important;
        }
        .form-contact .row form p label {
            width: 100%;
        }
        .col-5 form input[type="text"] {
            width: 100%;
            margin-bottom: 5px;
        }
        .col-5 form input[type="submit"] {
            margin: 20px 13px 0px auto !important;
            width: unset;
        }
        form input[type="submit"] {
            width: unset;
        }
        form input[type="text"] {
            width: 100%;
        }
    }

    /* Altura */
    @media (max-height: 850px) {
        body {
            overflow-y: scroll;
        }
    }
</style>
<div class="page9-1 row no-gutters fade-in">
    <div class="col-12 form-contact fade-in">
        <h2 class="semibold">Get a cost about your project</h2>
        <div class="row">
            <div class="col-5 offset-1 formulario-price fade-in">
                <h3>Price Calculation</h3>
                <form action="">
                    <p>
                        <label for="Materials">Materials</label>
                        <input type="text" name="Materials" required>
                    </p>
                    <p>
                        <label for="Bedrooms">Bedrooms</label> 
                        <input type="text" name="Bedrooms" required>
                    </p>
                    <p>
                        <label for="Installation">Installation</label> 
                        <input type="text" name="Installation" required>
                    </p>
                    <p>
                        <label for="Start Date">Start Date</label> 
                        <input type="text" name="Start Date" required>
                    </p>
                    <input type="submit" value="Get a cost">
                </form>
            </div>
            <div class="col-4 offset-1 formulario-contact fade-in">
                <h3>You want us to call it</h3>
                <form action="">
                    <p>
                        <label for="Phone Number">Phone Number</label>
                        <input type="text" name="Phone Number" required>
                    </p>
                    <p>
                        <label for="Email">E-mail</label> 
                        <input type="text" name="Email" required>
                    </p>
                    <input type="submit" value="Send">
                </form>
            </div>
        </div>
    </div>
    @include('layouts.elementos.redes')
</div>
@endsection

