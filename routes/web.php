<?php

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

//  Landing page
Route::get('/', function () {

    $events = [
        [
            "image" => "https://res.cloudinary.com/test-strike/image/upload/v1702009266/Events/u22one_ca7avl.png",
        ],
        [
            "image" => "https://res.cloudinary.com/test-strike/image/upload/v1702009266/Events/screenshot_2023-02-27_at_2.06.34_pm_fy8v5q.png",
        ],
        [
            "image" => "https://res.cloudinary.com/test-strike/image/upload/v1702009265/Events/anya_sio_wk40m7.png",
        ],
        [
            "image" => "https://res.cloudinary.com/test-strike/image/upload/v1702009265/Events/350622704_569405701975836_7192318548279517516_n_ps9xzo.jpg",
        ],
        [
            "image" => "https://res.cloudinary.com/test-strike/image/upload/v1702009264/Events/korean_exchange_2018_uzniyv.jpg",
        ],
        [
            "image" => "https://res.cloudinary.com/test-strike/image/upload/v1702009264/Events/75553007_3075258059169919_6957732511396921344_n_omfcvd.jpg",
        ],
        [
            "image" => "https://res.cloudinary.com/test-strike/image/upload/v1702009264/Events/285044597_5810654732296891_407084135500207517_n_euosbb.jpg",
        ],
        [
            "image" => "https://res.cloudinary.com/test-strike/image/upload/v1702009264/Events/402043857_849728990493122_7694688429340728986_n_1_n7hzvv.jpg"
        ]
    ];

    $testimonials = [
        [
            "image" => "https://res.cloudinary.com/test-strike/image/upload/v1702011837/Testimonials/tinywow_79350280_3137254119636979_4560698172439003136_n_1__42492023_wxp3sd.webp",
        ],
        [
            "image" => "https://res.cloudinary.com/test-strike/image/upload/v1702011836/Testimonials/tinywow_179166983_4549252985103745_3418069252889582571_n_1__42491869_psanmv.webp",
        ],
        [
            "image" => "https://res.cloudinary.com/test-strike/image/upload/v1702011835/Testimonials/jeremy-kwok-BTYyOhExaHA-unsplash_1_mtkczf.webp",
        ],
        [
            "image" => "https://res.cloudinary.com/test-strike/image/upload/v1702011834/Testimonials/375260947_797851579014197_1843889591040674101_n_z0uksc.webp",
        ],
        [
            "image" => "https://res.cloudinary.com/test-strike/image/upload/v1702011833/Testimonials/350644698_781488820023895_6700239987926652771_n_1_qskogi.webp",
        ],
        [
            "image" => "https://res.cloudinary.com/test-strike/image/upload/v1702011825/Testimonials/296612625_468131725319519_266821404830095123_n_1_d3tk8n.webp",
        ],
    ];

    return view(
        'landing',
        [
            'events' => $events,
            'testimonials' => $testimonials
        ]
    );
});


//  Programmes
Route::get('/programmes', function () {

    $arr = [
        [
            "title" => "Foundation",
            "agerange" => "7-16 years old",
            "suitable" => "Beginners",
            "desc" => "The STRIKE 1 programme is designed to establish the foundation bowling skills including proper finishing position, approach and basic release. At the same time, the students will be introduced to basic code of conduct and bowling etiquette in a fun and interactive environment.",
            "image" => "https://res.cloudinary.com/test-strike/image/upload/v1702006800/Programmes/fvt6wn495ijmzcwxop5n.webp"
        ],
        [
            "title" => "Performance",
            "agerange" => "7-16 years old",
            "suitable" => "Advanced",
            "desc" => "The STRIKE 2 programme is an enhancement of the foundation bowling skills taught during STRIKE 1. New founndation skills like timing, footwork, free swing, power step and a smoother release will be taught. The kids will continue to be exposed to the correct values of sportsmanship and learn the joys of making new friends in a fun and natural way.",
            "image" => "https://res.cloudinary.com/test-strike/image/upload/v1702018976/Programmes/2_p2tfcd.webp"
        ],
        [
            "title" => "Center of Excellence",
            "agerange" => "7-16 years old and also young adults",
            "suitable" => "Aspiring National Bowlers",
            "desc" => "STRIKE Academy is endorsed by the Singapore Bowling Federation to conduct COE classes. Knowing the importance of establishing good bowling foundation in young bowlers, STRIKE is happy and honoured to be recognised and entrusted with the responsibilty.",
            "image" => "https://res.cloudinary.com/test-strike/image/upload/v1702018959/Programmes/tinywow_3_42493501_lqkwax.webp"
        ],
        [
            "title" => "Virtual Coaching",
            "agerange" => "7-16 years old",
            "suitable" => "Beginners",
            "desc" => "At STRIKE, we make use of motion analysis software to analyze a bowler’s physical game. With the ability to freeze frames and run videos in slow motion, we are able to identify any fault within his game. The ability to visually analyze his game from the front, side and back views gives additional information on his game play, consistency on targets, release and footwork.",
            "image" => "https://res.cloudinary.com/test-strike/image/upload/v1702018959/Programmes/tinywow_4_42493609_r0vb49.webp"
        ]
    ];

    return view(
        'programmes/programmes',
        ['programmes' => $arr]
    );
})->name('programme.index');

Route::get('/programme-details', function () {
    return view('programmes/programme-details');
});

Route::get('/enroll', function () {
    return view('enroll');
});

//  Inquire
Route::get('/inquire', function () {
    return view('inquiry');
});

Route::get('/inquiry-management', function () {
    return view('admin/inquiry/inquiry-management');
});
Route::get('/inquiry-details', function () {
    return view('admin/inquiry/inquiry-details');
});


// Events
Route::get('/events', function () {

    $events = [
        [
            "image" => "https://res.cloudinary.com/test-strike/image/upload/v1702009266/Events/u22one_ca7avl.png",
        ],
        [
            "image" => "https://res.cloudinary.com/test-strike/image/upload/v1702009266/Events/screenshot_2023-02-27_at_2.06.34_pm_fy8v5q.png",
        ],
        [
            "image" => "https://res.cloudinary.com/test-strike/image/upload/v1702009265/Events/anya_sio_wk40m7.png",
        ],
        [
            "image" => "https://res.cloudinary.com/test-strike/image/upload/v1702009265/Events/350622704_569405701975836_7192318548279517516_n_ps9xzo.jpg",
        ],
        [
            "image" => "https://res.cloudinary.com/test-strike/image/upload/v1702009264/Events/korean_exchange_2018_uzniyv.jpg",
        ],
        [
            "image" => "https://res.cloudinary.com/test-strike/image/upload/v1702009264/Events/75553007_3075258059169919_6957732511396921344_n_omfcvd.jpg",
        ],
        [
            "image" => "https://res.cloudinary.com/test-strike/image/upload/v1702009264/Events/285044597_5810654732296891_407084135500207517_n_euosbb.jpg",
        ],
        [
            "image" => "https://res.cloudinary.com/test-strike/image/upload/v1702009264/Events/402043857_849728990493122_7694688429340728986_n_1_n7hzvv.jpg"
        ]
    ];

    return view(
        'events/events',
        ['events' => $events]
    );
});

Route::get('/event-details', function () {
    return view('events/event-details');
});


//  Testimonials
Route::get('/testimonials', function () {

    $testimonials = [
        [
            "image" => "https://res.cloudinary.com/test-strike/image/upload/v1702011838/Testimonials/tinywow_salemi-wenda-d3_I8y2Kgm0-unsplash_1__42494125_jv0cgy.webp",
        ],
        [
            "image" => "https://res.cloudinary.com/test-strike/image/upload/v1702011837/Testimonials/tinywow_paola-aguilar-O-FR79xcGh8-unsplash_1__42493988_o11l1d.webp",
        ],
        [
            "image" => "https://res.cloudinary.com/test-strike/image/upload/v1702011837/Testimonials/tinywow_79350280_3137254119636979_4560698172439003136_n_1__42492023_wxp3sd.webp",
        ],
        [
            "image" => "https://res.cloudinary.com/test-strike/image/upload/v1702011836/Testimonials/tinywow_179166983_4549252985103745_3418069252889582571_n_1__42491869_psanmv.webp",
        ],
        [
            "image" => "https://res.cloudinary.com/test-strike/image/upload/v1702011836/Testimonials/bethany-beck-82NHIKIvKNc-unsplash_1_p45ti1.webp",
        ],
        [
            "image" => "https://res.cloudinary.com/test-strike/image/upload/v1702011835/Testimonials/jeremy-kwok-BTYyOhExaHA-unsplash_1_mtkczf.webp",
        ],
        [
            "image" => "https://res.cloudinary.com/test-strike/image/upload/v1702011834/Testimonials/375260947_797851579014197_1843889591040674101_n_z0uksc.webp",
        ],
        [
            "image" => "https://res.cloudinary.com/test-strike/image/upload/v1702011833/Testimonials/350644698_781488820023895_6700239987926652771_n_1_qskogi.webp",
        ],
        [
            "image" => "https://res.cloudinary.com/test-strike/image/upload/v1702011825/Testimonials/296612625_468131725319519_266821404830095123_n_1_d3tk8n.webp",
        ],
    ];

    // $success = [
    //     [
    //         'image' => "https://res.cloudinary.com/test-strike/image/upload/v1702012409/Success/tinywow_350836209_969512447531209_9199530780059439315_n_42492430_e7bmue.webp",
    //     ],
    //     [
    //         'image' => "https://res.cloudinary.com/test-strike/image/upload/v1702012409/Success/tinywow_352566663_736265191839503_2841598766576262019_n_42492471_otgrft.webp",
    //     ],
    //     [
    //         'image' => "https://res.cloudinary.com/test-strike/image/upload/v1702012408/Success/tinywow_317091173_574277038038320_421155333759101358_n_42492195_fjbaqg.webp",
    //     ],
    //     [
    //         'image' => "https://res.cloudinary.com/test-strike/image/upload/v1702012408/Success/tinywow_333582917_581848167198369_4679074505696420480_n_42492330_rxfqdb.webp",
    //     ],
    // ];

    return view('testimonials/testimonials', [
        'testimonials' => $testimonials,
        // 'success' => $success
    ]);
});

Route::get('/case-study', function () {
    return view('testimonials/case-study');
});


//  Bowlwer Achievements
Route::get('/bowlers-achievement', function () {

    $achievements = [
        [
            'image' => "https://res.cloudinary.com/test-strike/image/upload/v1702012409/Success/tinywow_350836209_969512447531209_9199530780059439315_n_42492430_e7bmue.webp",
        ],
        [
            'image' => "https://res.cloudinary.com/test-strike/image/upload/v1702012409/Success/tinywow_352566663_736265191839503_2841598766576262019_n_42492471_otgrft.webp",
        ],
        [
            'image' => "https://res.cloudinary.com/test-strike/image/upload/v1702012408/Success/tinywow_317091173_574277038038320_421155333759101358_n_42492195_fjbaqg.webp",
        ],
        [
            'image' => "https://res.cloudinary.com/test-strike/image/upload/v1702012408/Success/tinywow_333582917_581848167198369_4679074505696420480_n_42492330_rxfqdb.webp",
        ],
    ];

    return view(
        'bowlers-achievement/bowlers-achievement',
        ['achievements' => $achievements]
    );
});

Route::get('/bowlers-achievement-details', function () {
    return view('bowlers-achievement/bowlers-achievement-details');
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
Route::get('/marketplace', function () {
    return view('marketplace/home');
});
Route::get('/products', function () {
    return View('marketplace/products');
});
Route::get('/product-details', function () {
    return View('marketplace/product-details');
});


//  Administrators
Route::get('/login', function () {
    return view('admin/login');
});

Route::get('/unauthorized', function () {
    return View('errors/unauthorized');
});

Route::get('/dashboard', function () {
    return view('admin/dashboard');
});
Route::get('/add-admin', function () {
    return view('admin/add-admin');
});
Route::get('/admin-details-editor', function () {
    return view('admin/admin-details-editor');
});

Route::get('/landing-editor', function () {

    $events = [
        [
            "image" => "https://res.cloudinary.com/test-strike/image/upload/v1702009266/Events/u22one_ca7avl.png",
        ],
        [
            "image" => "https://res.cloudinary.com/test-strike/image/upload/v1702009266/Events/screenshot_2023-02-27_at_2.06.34_pm_fy8v5q.png",
        ],
        [
            "image" => "https://res.cloudinary.com/test-strike/image/upload/v1702009265/Events/anya_sio_wk40m7.png",
        ],
        [
            "image" => "https://res.cloudinary.com/test-strike/image/upload/v1702009265/Events/350622704_569405701975836_7192318548279517516_n_ps9xzo.jpg",
        ],
        [
            "image" => "https://res.cloudinary.com/test-strike/image/upload/v1702009264/Events/korean_exchange_2018_uzniyv.jpg",
        ],
        [
            "image" => "https://res.cloudinary.com/test-strike/image/upload/v1702009264/Events/75553007_3075258059169919_6957732511396921344_n_omfcvd.jpg",
        ],
        [
            "image" => "https://res.cloudinary.com/test-strike/image/upload/v1702009264/Events/285044597_5810654732296891_407084135500207517_n_euosbb.jpg",
        ],
        [
            "image" => "https://res.cloudinary.com/test-strike/image/upload/v1702009264/Events/402043857_849728990493122_7694688429340728986_n_1_n7hzvv.jpg"
        ]
    ];

    $testimonials = [
        [
            "image" => "https://res.cloudinary.com/test-strike/image/upload/v1702011837/Testimonials/tinywow_79350280_3137254119636979_4560698172439003136_n_1__42492023_wxp3sd.webp",
        ],
        [
            "image" => "https://res.cloudinary.com/test-strike/image/upload/v1702011836/Testimonials/tinywow_179166983_4549252985103745_3418069252889582571_n_1__42491869_psanmv.webp",
        ],
        [
            "image" => "https://res.cloudinary.com/test-strike/image/upload/v1702011835/Testimonials/jeremy-kwok-BTYyOhExaHA-unsplash_1_mtkczf.webp",
        ],
        [
            "image" => "https://res.cloudinary.com/test-strike/image/upload/v1702011834/Testimonials/375260947_797851579014197_1843889591040674101_n_z0uksc.webp",
        ],
        [
            "image" => "https://res.cloudinary.com/test-strike/image/upload/v1702011833/Testimonials/350644698_781488820023895_6700239987926652771_n_1_qskogi.webp",
        ],
        [
            "image" => "https://res.cloudinary.com/test-strike/image/upload/v1702011825/Testimonials/296612625_468131725319519_266821404830095123_n_1_d3tk8n.webp",
        ],
    ];

    return view(
        'admin/landing-editor',
        [
            'events' => $events,
            'testimonials' => $testimonials
        ]
    );
});


//  Programmes Management
Route::get('/programmes-management', function () {

    $arr = [
        [
            "title" => "Foundation",
            "agerange" => "7-16 years old",
            "suitable" => "Beginners",
            "desc" => "The STRIKE 1 programme is designed to establish the foundation bowling skills including proper finishing position, approach and basic release. At the same time, the students will be introduced to basic code of conduct and bowling etiquette in a fun and interactive environment.",
            "image" => "https://res.cloudinary.com/test-strike/image/upload/v1702006800/Programmes/fvt6wn495ijmzcwxop5n.webp"
        ],
        [
            "title" => "Performance",
            "agerange" => "7-16 years old",
            "suitable" => "Advanced",
            "desc" => "The STRIKE 2 programme is an enhancement of the foundation bowling skills taught during STRIKE 1. New founndation skills like timing, footwork, free swing, power step and a smoother release will be taught. The kids will continue to be exposed to the correct values of sportsmanship and learn the joys of making new friends in a fun and natural way.",
            "image" => "https://res.cloudinary.com/test-strike/image/upload/v1702018976/Programmes/2_p2tfcd.webp"
        ],
        [
            "title" => "Center of Excellence",
            "agerange" => "7-16 years old and also young adults",
            "suitable" => "Aspiring National Bowlers",
            "desc" => "STRIKE Academy is endorsed by the Singapore Bowling Federation to conduct COE classes. Knowing the importance of establishing good bowling foundation in young bowlers, STRIKE is happy and honoured to be recognised and entrusted with the responsibilty.",
            "image" => "https://res.cloudinary.com/test-strike/image/upload/v1702018959/Programmes/tinywow_3_42493501_lqkwax.webp"
        ],
        [
            "title" => "Virtual Coaching",
            "agerange" => "7-16 years old",
            "suitable" => "Beginners",
            "desc" => "At STRIKE, we make use of motion analysis software to analyze a bowler’s physical game. With the ability to freeze frames and run videos in slow motion, we are able to identify any fault within his game. The ability to visually analyze his game from the front, side and back views gives additional information on his game play, consistency on targets, release and footwork.",
            "image" => "https://res.cloudinary.com/test-strike/image/upload/v1702018959/Programmes/tinywow_4_42493609_r0vb49.webp"
        ]
    ];

    return view(
        'admin/programmes/programmes-management',
        ['programmes' => $arr]
    );
})->name('programmes-management.index');

Route::get('/add-programme', function () {
    return view('admin/programmes/add-programme');
})->name('add-programme.index');

Route::get('/programme-details-editor', function () {
    return view('admin/programmes/programme-details-editor');
})->name('programme-details-editor.index');


// Events Management
Route::get('/events-management', function () {

    $events = [
        [
            "image" => "https://res.cloudinary.com/test-strike/image/upload/v1702009266/Events/u22one_ca7avl.png",
        ],
        [
            "image" => "https://res.cloudinary.com/test-strike/image/upload/v1702009266/Events/screenshot_2023-02-27_at_2.06.34_pm_fy8v5q.png",
        ],
        [
            "image" => "https://res.cloudinary.com/test-strike/image/upload/v1702009265/Events/anya_sio_wk40m7.png",
        ],
        [
            "image" => "https://res.cloudinary.com/test-strike/image/upload/v1702009265/Events/350622704_569405701975836_7192318548279517516_n_ps9xzo.jpg",
        ],
        [
            "image" => "https://res.cloudinary.com/test-strike/image/upload/v1702009264/Events/korean_exchange_2018_uzniyv.jpg",
        ],
        [
            "image" => "https://res.cloudinary.com/test-strike/image/upload/v1702009264/Events/75553007_3075258059169919_6957732511396921344_n_omfcvd.jpg",
        ],
        [
            "image" => "https://res.cloudinary.com/test-strike/image/upload/v1702009264/Events/285044597_5810654732296891_407084135500207517_n_euosbb.jpg",
        ],
        [
            "image" => "https://res.cloudinary.com/test-strike/image/upload/v1702009264/Events/402043857_849728990493122_7694688429340728986_n_1_n7hzvv.jpg"
        ]
    ];

    return view('admin/events/events-management', ['events' => $events]);
})->name('events-management.index');

Route::get('/add-event', function () {
    return view('admin/events/add-event');
})->name('add-event.index');

Route::get('event-details-editor', function () {
    return view('admin/events/event-details-editor');
})->name('event-details-editor.index');


//  Testimonials Management
Route::get('/testimonials-management', function () {

    $testimonials = [
        [
            "image" => "https://res.cloudinary.com/test-strike/image/upload/v1702011837/Testimonials/tinywow_79350280_3137254119636979_4560698172439003136_n_1__42492023_wxp3sd.webp",
        ],
        [
            "image" => "https://res.cloudinary.com/test-strike/image/upload/v1702011836/Testimonials/tinywow_179166983_4549252985103745_3418069252889582571_n_1__42491869_psanmv.webp",
        ],
        [
            "image" => "https://res.cloudinary.com/test-strike/image/upload/v1702011835/Testimonials/jeremy-kwok-BTYyOhExaHA-unsplash_1_mtkczf.webp",
        ],
        [
            "image" => "https://res.cloudinary.com/test-strike/image/upload/v1702011834/Testimonials/375260947_797851579014197_1843889591040674101_n_z0uksc.webp",
        ],
        [
            "image" => "https://res.cloudinary.com/test-strike/image/upload/v1702011833/Testimonials/350644698_781488820023895_6700239987926652771_n_1_qskogi.webp",
        ],
        [
            "image" => "https://res.cloudinary.com/test-strike/image/upload/v1702011825/Testimonials/296612625_468131725319519_266821404830095123_n_1_d3tk8n.webp",
        ],
    ];

    return view(
        'admin/testimonials/testimonials-management',
        [
            'testimonials' => $testimonials
        ]
    );
});
Route::get('/add-testimonial', function () {
    return view('admin/testimonials/add-testimonial');
});
Route::get('/testimonial-editor', function () {
    return view('admin/testimonials/testimonial-editor');
});


//  Bowler's Achievement Management 
Route::get('/bowlers-achievement-management', function () {

    $achievements = [
        [
            'image' => "https://res.cloudinary.com/test-strike/image/upload/v1702012409/Success/tinywow_350836209_969512447531209_9199530780059439315_n_42492430_e7bmue.webp",
        ],
        [
            'image' => "https://res.cloudinary.com/test-strike/image/upload/v1702012409/Success/tinywow_352566663_736265191839503_2841598766576262019_n_42492471_otgrft.webp",
        ],
        [
            'image' => "https://res.cloudinary.com/test-strike/image/upload/v1702012408/Success/tinywow_317091173_574277038038320_421155333759101358_n_42492195_fjbaqg.webp",
        ],
        [
            'image' => "https://res.cloudinary.com/test-strike/image/upload/v1702012408/Success/tinywow_333582917_581848167198369_4679074505696420480_n_42492330_rxfqdb.webp",
        ],
    ];

    return view(
        'admin/bowlers-achievement/bowlers-achievement-management',
        ['achievements' => $achievements]
    );
});
Route::get('/add-bowlers-achievement', function () {
    return view('admin/bowlers-achievement/add-bowlers-achievement');
});
Route::get('/bowlers-achievement-details-editor', function () {
    return view('admin/bowlers-achievement/bowlers-achievement-editor');
});


// Calendar Management
Route::get('/calendar-management', function () {
    return view('admin/calendar/calendar-management');
})->name('calendar-editor.index');

Route::get('/add-calendar-event', function () {
    return view('admin/calendar/add-calendar-event');
})->name('add-calendar-event.index');

Route::get('/calendar-event-editor', function () {
    return view('admin/calendar/calendar-event-editor');
})->name('calendar-event-editor.index');


// About us Editor
Route::get('/about-us-editor', function () {
    return view('admin/info-pages/about-us-editor');
});


//  Coach Management
Route::get('/coaches-management', function () {
    return view('admin/info-pages/coaches/coaches-management');
});
Route::get('/add-coach', function () {
    return view('admin/info-pages/coaches/add-coach');
});
Route::get('/coach-details-editor', function () {
    return view('admin/info-pages/coaches/coach-details-editor');
});


//  Important Policies Management
Route::get('/important-policies-management', function () {
    return view('admin/info-pages/important-policies/important-policies-management');
});
Route::get('/add-important-policy', function () {
    return view('admin/info-pages/important-policies/add-important-policy');
});
Route::get('/important-policy-editor', function () {
    return view('admin/info-pages/important-policies/important-policy-editor');
});


//  Contact Us Editor
Route::get('/contact-us-editor', function () {
    return view('admin/info-pages/contact-us-editor');
});
