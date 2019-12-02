@extends('layouts.app')
@section('title', 'House Features')
@section('content')
<style>
    body {
        overflow-y: scroll;
    }
    .background {
        background: #000000af;
    }
</style>
<div class="fade-in">
    <div class="top">
        <div class="top-main">
            <div class="description">
                <h2 class="bold titulo-features">
                    Have you ever though about<br>
                    purchasing a Kit or Panel Home?
                </h2>
                <div class="division"></div>
                <p class="bold">
                    Our goal is to elevate your design with Karrak's sustainable<br>
                    homes High design available to everyone
                </p>
            </div>
        </div>
    </div>
    <div class="page2">
        <h1 class="extrabold">House Features</h1>
        <div class="features">
            <div class="features-item">
                <img src="{{asset('/images/PLant-assets.png')}}" alt="Open up to a greener lifestyle">
                <h3 class="bold">Open up to a <br> greener lifestyle</h3>
                <p class="texto light">We incorporate green technologies such as XXXX, to make your home sustainable and towards zero carbon footprint.</p>
            </div>
            <div class="features-item">
                <img src="{{asset('/images/House-assets.png')}}" alt="High Design">
                <h3 class="bold">High Design</h3>
                <p class="texto light">
                    A high design that has been already tested through innovate manufacturing processes, and usually only available to a few is now at your disposal,
                    thanks to our architects and manufacturers that have added value through high-end unique designs and contruction.                
                </p>
            </div>
            <div class="features-item">
                <img src="{{asset('/images/Engrane.assets.png')}}" alt="Step by Step">
                <h3 class="bold">Step by Step</h3>
                <p class="texto light">
                    Our homes are designed and constructed in stages, allowing the comfort of having a designed house transported to you in pieces ready 
                    to be assembled on site. Building takes only 4 days.
                </p>
            </div>
            <div class="features-item">
                <img src="{{asset('/images/Idea-assets.png')}}" alt="Transparent">
                <h3 class="bold">Transparent</h3>
                <p class="texto light">
                    Your knowledge is our goal. How do you build it? Where do the parts come from? How do we work towards producing zero carbon footprint?
                    What, where and how.
                </p>
            </div>
            <div class="features-item">
                <img src="{{asset('/images/Work-assets.png')}}" alt="Tailored your site">
                <h3 class="bold">Tailored to <br> your site</h3>
                <p class="texto light">
                    Every project is different. Your home sits within a microclimate and streetscape.
                </p>
            </div>
        </div>
        @include('layouts.elementos.redes')
    </div>
</div>
@endsection

