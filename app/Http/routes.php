<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('blank');
});

// Houses

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/home/features', function () {
    return view('home-features');
})->name('home-features');

Route::get('/home/quote', function () {
    return view('home-quote');
})->name('home-quote');

Route::get('/home/building', function () {
    return view('home-building');
})->name('home-building');

Route::get('/home/lifestyle', function () {
    return view('home-lifestyle');
})->name('home-lifestyle');

// Country Houses

Route::get('/country-houses', function () {
    return view('country-houses');
})->name('country-houses');

Route::get('/country-houses/features', function () {
    return view('country-houses-features');
})->name('country-houses-features');

Route::get('/country-houses/individual', function () {
    return view('country-houses-individual');
})->name('country-houses-individual');

Route::get('/country-houses/building', function () {
    return view('country-houses-building');
})->name('country-houses-building');

Route::get('/country-houses/lifestyle', function () {
    return view('country-houses-lifestyle');
})->name('country-houses-lifestyle');

// City Houses

Route::get('/city-houses', function () {
    return view('city-houses');
})->name('city-houses');

Route::get('/city-houses/features', function () {
    return view('city-houses-features');
})->name('city-houses-features');

Route::get('/city-houses/individual', function () {
    return view('city-houses-individual');
})->name('city-houses-individual');

Route::get('/city-houses/building', function () {
    return view('city-houses-building');
})->name('city-houses-building');

Route::get('/city-houses/lifestyle', function () {
    return view('city-houses-lifestyle');
})->name('city-houses-lifestyle');

// Sección 5

Route::get('/house-design', function () {
    return view('house-design');
})->name('house-design');

// Get Started    

Route::get('/getstarted', function () {
    return view('getstarted');
})->name('getstarted');

Route::get('/getstarted/building', function () {
    return view('getstarted-building');
})->name('getstarted-building');

Route::get('/getstarted/finance', function () {
    return view('getstarted-finance');
})->name('getstarted-finance');

Route::get('/getstarted/occupancy', function () {
    return view('getstarted-occupancy');
})->name('getstarted-occupancy');

// Features

Route::get('/features', function () {
    return view('features');
})->name('features');

// Sección 8

Route::get('/getacost', function () {
    return view('getacost');
})->name('getacost');

// Contact

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/contact/about-us', function () {
    return view('contact-about');
})->name('contact-about');

Route::get('/contact/people', function () {
    return view('contact-people');
})->name('contact-people');