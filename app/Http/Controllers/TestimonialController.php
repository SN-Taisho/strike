<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Images;
use Illuminate\View\View;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
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
    
        $success = [
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
    
        return view('admin/testimonials/testimonials-management', [
            'testimonials' => $testimonials,
            'success' => $success
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/testimonials/add-testimonial');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $validated = $request->validate([
            'name' => 'required',
            'role' => 'required',
            'body' => 'required',
        ]);


        try
        {
            if ($request->hasFile('image')) 
            {
                $imagePath = $request->file('image')->store('testimonials', 'public');
            
                $img = Images::create([
                    'name' => $validated['name'],
                    'use_for' => 'testimonials',
                    'link' => $imagePath
                ]);
            }
            $testimonial = Testimonial::create([
                'name' => $validated['name'],
                'role' => $validated['role'],
                'body' => $validated['body'],
                'featured' => 'no',
                'images_id' =>  optional($img)->id
            ]);

            return redirect()->route('testimonials.index')->with('success', 'Event added successfully');
            
        }catch (Exception $e) 
        {
            return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonial $testimonial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        //
    }
}
