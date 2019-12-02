@extends('layouts.app')
@section('title', 'Country Houses')
@section('content')
<style>
    .background {
        background: #000000af;
    }
    footer {
        display: none !important;
    }
    @media(max-width:960px) {
        .titulos h1 {
            margin-bottom: 40px;
            font-size: 50px;
        }
        .titulos h2 {
            margin-bottom: 40px;
        }
        .page3-1 .titulos {
            margin-top: 30px;
        }
    }
    @media(max-width:800px) {
        .titulos h1 {
            margin-bottom: 35px;
            font-size: 40px;
        }
        .titulos h2 {
            font-size: 35px;
            margin-bottom: 35px;
        }
        .fade-in-text {
            width: 12%;
        }
    }
    @media(max-width:475px) { 
        .titulos h1 span {
            margin-bottom: unset;
        }
        .titulos h1 {
            font-size: 35px;
        }
        .page3-1 .titulos {
            margin-top: 20px;
        }
    }
    @media(max-width:325px) { 
        .titulos h1 {
            font-size: 30px;
        }
        .titulos h2 {
            font-size: 30px;
        }
    }
</style>
<div class="page3-1 row no-gutters fade-in">
    <div class="opacity"></div>
    <div class="titulos">
        <h1 class="semibold">
            <span>Houses Name</span>
            The house you want to grow in.
        </h1>
        <h2 class="light">Watch our video.</h2>
        <img class="fade-in-text" src="{{asset('/images/play-button.png')}}" alt="Play">
    </div>
    @include('layouts.elementos.redes')
</div>
@endsection
