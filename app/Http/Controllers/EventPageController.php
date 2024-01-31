<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Images;
use App\Models\EventPage;
use Illuminate\Http\Request;

class EventPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'description'
        ]);

        try
        {
            if ($request->hasFile('image')) 
            {
                $imagePath = $request->file('image')->store('events', 'public');
            
                $img = Images::create([
                    'name' => 'Event_banner',
                    'use_for' => 'events',
                    'link' => $imagePath
                ]);
            }

            $eventLanding = EventPage::create([
                'description' => $validated['description'],
                'images_id' => optional($img)->id
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
    public function show(EventPage $eventPage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EventPage $eventPage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, EventPage $eventPage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EventPage $eventPage)
    {
        //
    }
}
