<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Exception;
use App\Models\Home;
use App\Models\Images;
use Illuminate\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
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

        return view('admin/landing-editor',
            [
                 'events' => $events,
                'testimonials' => $testimonials
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'heading' => 'required',
            'subheading' => 'required',
            'bowler_num' => 'required',
            'bowler_desc' => 'required',
            'accuracy_num' => 'required',
            'accuracy_desc' => 'required',
            'champions_num' => 'required',
            'champions_desc' => 'required',
        ]);

        try
        {
            if ($request->hasFile('image')) 
            {
                $imagePath = $request->file('image')->store('home', 'public');
            
                $img = Images::create([
                    'name' => 'landing_banner',
                    'use_for' => 'home',
                    'link' => $imagePath
                ]);
            }

            $Landing = Home::create([
                'heading' => $validated['heading'],
                'subheading' => $validated['subheading'],
                'bowler_num' => $validated['bowler_num'],
                'bowler_desc' => $validated['bowler_desc'],
                'accuracy_num' => $validated['accuracy_num'],
                'accuracy_desc' => $validated['accuracy_desc'],
                'champions_num' => $validated['champions_num'],
                'champions_desc' => $validated['champions_desc'],
            ]);

            return redirect()->route('events.index')->with('success', 'Event added successfully');
            
        }catch (Exception $e) 
        {
            return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
        }
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Home $home)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Home $home)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Home $home)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Home $home)
    {
        //
    }

    public function display()
    {
        $events = Event::where('featured','yes')->latest()->get();
    
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

        return view('landing',
            [
                 'events' => $events,
                'testimonials' => $testimonials
            ]
        );
    }
}
