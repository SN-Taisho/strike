<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Exception;
use App\Models\Event;
use App\Models\EventPage;
use App\Models\Images;
use Illuminate\View\View;
use Illuminate\Http\Request;


class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {

        
        $events = Event::all();
        $eventLanding = EventPage::latest()->first();
        $categories = Category::where('use_for','events');
    
        return view('admin/events/events-management',[
            'events' => $events,
            'eventDetails' => $eventLanding,
            'categories' => $categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        $categories = Category::where('use_for','events')->get();

        return view('admin/events/add-event',[
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'location' => 'required',
            'date' => 'required',
            'body' => 'required',
        ]);

        try
        {
            if ($request->hasFile('image')) 
            {
                $imagePath = $request->file('image')->store('events', 'public');
            
                $img = Images::create([
                    'name' => $validated['name'],
                    'use_for' => 'events',
                    'link' => $imagePath
                ]);
            }

            $event = Event::create([
                'name' => $validated['name'],
                'location' => $validated['location'],
                'date' => $validated['date'],
                'body' => $validated['body'],
                'featured' => 'no',
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
    public function show(Event $event): View
    {
        return view('events/event-details',[
            'event' => $event
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        return view('admin/events/event-details-editor',[
            'event' => $event
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        $validated = $request->validate([
            'name' => 'required',
            'location' => 'required',
            'date' => 'required',
            'body' => 'required',
        ]);

        try
        {
            if ($request->hasFile('image')) 
            {
                $imagePath = $request->file('image')->store('events', 'public');
            
                $img = Images::create([
                    'name' => $validated['name'],
                    'use_for' => 'events',
                    'link' => $imagePath
                ]);
            }else
            {
                $imagePath = $event->images_id;
                $validated['images_id'] = $imagePath;
            }

            $validated['featured'] = 'no';

            $event->update($validated);

            return redirect()->route('events.index')->with('success', 'Event added successfully');
            
        }catch (Exception $e) 
        {
            return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
        }
    }

    public function updateFeature(Request $request){

        $eventId = $request->input('event_id');
        $isFeatured = $request->input('is_featured');
    
        // Retrieve the event from the database
        $event = Event::find($eventId);
    
        if (!$event) {
            return response()->json(['error' => 'Event not found'], 404);
        }
    
        // Update the 'is_featured' status based on the checkbox value
        $event->update(['featured' => $isFeatured]);
    
        return response()->json(['success' => true]);
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        try 
        {
            $event->delete();
            return redirect()->back();
        } catch (\Exception $e) {
            // Log or display error message
            dd($e->getMessage()); // Print error message for debugging
        }
    }

    public function display():View
    {
        $events = Event::all();

        return view('events.events',[
            'events' => $events
            ]
        );
    }

    
}
