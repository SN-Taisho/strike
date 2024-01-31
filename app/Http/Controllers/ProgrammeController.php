<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Images;
use App\Models\Programme;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class ProgrammeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $programmes = Programme::all();

        return view(
            'admin/programmes/programmes-management',
            ['programmes' => $programmes]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/programmes/add-programme');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required',
            'subheading' => 'required',
            'image' => 'required|image',
            'description' => 'required',
            'duration' => 'nullable|string',
            'age' => 'nullable|string',
            'req_skill' => 'nullable|string',
            'other_info' => 'nullable|string',
        ]);
    


        try 
        {
            if ($request->hasFile('image')) 
            {
                $imagePath = $request->file('image')->store('programmes', 'public');
            
                $img = Images::create([
                    'name' => $validated['name'],
                    'use_for' => 'programmes',
                    'link' => $imagePath
                ]);
            }
    
            $programme = Programme::create([
                'name' => $validated['name'],
                'subheading' => $validated['subheading'],
                'duration' => $validated['duration'],
                'age' => $validated['age'],
                'req_skill' => $validated['req_skill'],
                'description' => $validated['description'],
                'other_info' => $validated['other_info'],
                'images_id' => optional($img)->id
            ]);

            return redirect()->route('programmes.index')->with('success', 'Programme added successfully');
        } catch (Exception $e) 
        {
            return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
        }
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Programme $programme)
    {
        
        return view('programmes.programme-details',[
            'programme' => $programme
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Programme $programme)
    {
        return view('admin/programmes/programme-details-editor',[
            'programme' => $programme
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Programme $programme)
    {
        $validated = $request->validate([
            'name' => 'required|unique',
            'subheading' => 'required',
            'description' => 'required',
            'age' => 'required',
            'req_skill' => 'required',
            'other_info' => 'required',
        ]);
        try
        {
            if ($request->hasFile('image')) 
            {
                $imagePath = $request->file('image')->store('programmes', 'public');
            
                $img = Images::create([
                    'name' => $validated['name'],
                    'use_for' => 'programmes',
                    'link' => $imagePath
                ]);
                $validated['images_id'] = optional($img)->id;
            }else
            {
                $imagePath = $programme->images_id;
                $validated['images_id'] = $imagePath;
            }
            
            $programme->update($validated);

            return redirect()->route('programmes.index')->with('success', 'Programme updated successfully');
            
        } catch (Exception $e) 
        {
            return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
        }

        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Programme $programme)
    {
        $programme->delete();
        return redirect()->back();
    }

    public function display()
    {
        $programmes = Programme::all();
    
        return view(
            'programmes/programmes',
            ['programmes' => $programmes]
        );
    }
}
