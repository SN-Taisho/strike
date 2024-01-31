<?php

use App\Http\Controllers\BowlerAchievementController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CoachController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\EventPageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProgrammeController;
use App\Http\Controllers\TestimonialController;
use App\Models\Category;
use App\Models\Coach;
use App\Models\Event;
use App\Models\EventPage;
use Illuminate\Support\Facades\Route;
use Spatie\FlareClient\View;

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

Route::domain('admin.strike.test')->group(function () {

    Route::get('/',function(){
        return view('admin/dashboard');
    })->name('admin.index');

    //  Administrators
    Route::get('/unauthorized', function () {
        return View('errors/unauthorized');
    });
    
    Route::get('/dashboard', function () {
        return view('admin/dashboard');
    });
    
    Route::resource('landing', HomeController::class)
        ->only(['index', 'create' ,'store', 'edit', 'update', 'destroy']);
    
    Route::resource('programmes', ProgrammeController::class)
        ->only(['index', 'create' ,'store', 'edit', 'update', 'destroy']);
    
    // Events Management
    Route::resource('events', EventController::class)
        ->only(['index', 'create' ,'store', 'edit', 'update', 'destroy']);
    
    Route::post('/events/update-show-status', [EventController::class, 'updateFeature'])
        ->name('events.update-feature');

    // Calendar Editor
    Route::get('/calendar-editor', function () {
        return view('admin/calendar/calendar-editor');
    })->name('calendar-editor.index');
    
    Route::get('/add-calendar-event', function () {
        return view('admin/calendar/add-calendar-event');
    })->name('add-calendar-event.index');
    
    Route::get('/calendar-event-editor', function () {
        return view('admin/calendar/calendar-event-editor');
    })->name('calendar-event-editor.index');
    
    
    //  REMOVE BEFORE COMMITING
    Route::get('/test', function () {
        return view('test');
    });
    
    // About us Editor
    Route::get('/about-us-editor', function () {
        return view('admin/info-pages/about-us-editor');
    });
    
    //  Coach Management
    Route::resource('coach', CoachController::class)
        ->only(['index', 'store', 'edit', 'update', 'destroy']);

    Route::get('/coach/create/{shift}',[CoachController::class,'create'])
        ->name('coach.create');
    
    Route::get('/coach-details-editor', function () {
        return view('admin/info-pages/coaches/coach-details-editor');
    });
    
    //  Contact Us Editor
    Route::get('/contact-us-editor', function () {
        return view('admin/info-pages/contact-us-editor');
    });

    Route::resource('bowlers', BowlerAchievementController::class)
        ->only(['index', 'create' ,'store', 'edit', 'update', 'destroy']);

    //Testimonial
    Route::resource('testimonials',TestimonialController::class)
        ->only(['index', 'create' ,'store', 'edit', 'update', 'destroy']);

    //Categories
    // Route::resource('category',CategoryController::class)
    //     ->only(['index', 'create' ,'store', 'edit', 'update', 'destroy']);
    
    Route::post('/category/create',[CategoryController::class,'store'])
        ->name('category.store');
});