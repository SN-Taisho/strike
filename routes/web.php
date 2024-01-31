<?php

use Spatie\FlareClient\View;
use App\Models\BowlerAchievement;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProgrammeController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\BowlerAchievementController;

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
Route::domain('strike.test')->group(function () {

    Route::get('/',[HomeController::class,'display']);

    //  Programmes
    Route::prefix('programmes')->group(function(){
        Route::get('/',[ProgrammeController::class,'display'])
            ->name('programme.display');
        Route::get('/programme-details/{programme}',[ProgrammeController::class,'show'])
            ->name('programme.show');
    });


    
    Route::get('/enroll', function () {
        return view('enroll');
    });
    
    
    // Events
    Route::prefix('events')->group(function(){
        Route::get('/',[EventController::class,'display'])
            ->name('event.display');
        Route::get('/details/{event}',[EventController::class,'show'])
            ->name('event.show');
    });
    
    
    //  Testimonials
    Route::get('/testimonials',[TestimonialController::class,'index']);
    
    Route::get('/case-study', function () {
        return view('testimonials/case-study');
    });
    
    
    //  Bowlwer Achievements
    Route::prefix('bowlers-achievement')->group(function(){
        Route::get('/',[BowlerAchievementController::class,'index'])
            ->name('bowler.index');
        Route::get('/bowlers-achievement-details',[BowlerAchievementController::class,'show'])
            ->name('bowler.show');
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
    
    
    //  Marketplace
    Route::get('/products', function () {
        return View('marketplace/products');
    });
    Route::get('/product-details', function () {
        return View('marketplace/product-details');
    });
});