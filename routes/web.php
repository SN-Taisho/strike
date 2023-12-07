<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//  Landing page
Route::get('/', function () {
    return view('landing');
});

Route::get('/home', function () {
    return view('landing');
});


//  Programmes
Route::get('/programmes', function () {
    return view('programmes/programmes');
});

Route::get('/programme-details', function () {
    return view('programmes/programme-details');
});

Route::get('/enroll', function () {
    return view('enroll');
});


// Events
Route::get('/events', function () {
    return view('events/events');
});

Route::get('/event-details', function () {
    return view('events/event-details');
});


//  Gallery
Route::get('/gallery', function () {
    return view('gallery/gallery');
});


//  Resources
Route::get('/resources', function () {
    return view('resources/resources');
});

//  Testimonials
Route::get('/testimonials', function () {
    return view('testimonials/testimonials');
});
Route::get('/case-study', function () {
    return view('testimonials/case-study');
});


//  Information Pages
Route::get('/about-us', function () {
    return view('info-pages/about-us');
});

Route::get('/coaches', function () {
    return view('info-pages/coaches');
});

Route::get('/important-policies', function () {
    return view('info-pages/important-policies');
});

Route::get('/contact-us', function () {
    return view('info-pages/contact-us');
});

Route::get('/calendar', function () {
    return view('info-pages/calendar');
});