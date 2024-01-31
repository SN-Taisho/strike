<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Images;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\BowlerAchievement;

class BowlerAchievementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
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

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/bowlers-achievement/add-bowlers-achievement');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            // Validate the form data
            $validated = $request->validate([
                'tournament_name' => 'required|string',
                'tournament_category' => 'required|string',
                'description' => 'required|string',
                'ranks.*' => 'required|string', // Validate each runner-up 
                'image' => 'required',
            ]);
            
            dd($validated);

            try {

             

                if ($request->hasFile('image')) 
                {
                    // Handle image upload
                    $imagePath = $request->file('image')->store('tournaments', 'public');
        
                    // Create image record in the database
                    $image = Images::create([
                        'name' => $validated['tournament_name'],
                        'use_for' => 'bowler_achievement',
                        'link' => $imagePath,
                    ]);
                }
    
                // Store the tournament data in the database
                $tournament = BowlerAchievement::create([
                    'tournament_name' => $validated['tournament_name'],
                    'tournament_category' => $validated['tournament_category'],
                    'runner_ups' => $validated['runner_ups'],
                    'description' => $validated['description'],
                    'images_id' => $image->id,

                ]);
    
                return redirect()->route('bowlers.index')->with('success', 'Tournament added successfully');
    
            } catch (Exception $e) {
                return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
            }
    }
    
    
    

    /**
     * Display the specified resource.
     */
    public function show(BowlerAchievement $bowlerAchievement): View
    {
        return view('bowlers-achievement.bowlers-achievement-details');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BowlerAchievement $bowlerAchievement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BowlerAchievement $bowlerAchievement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BowlerAchievement $bowlerAchievement)
    {
        //
    }

    public function display()
    {
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
    }
}
