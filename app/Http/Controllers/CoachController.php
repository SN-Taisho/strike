<?php

namespace App\Http\Controllers;

use App\Models\Coach;
use App\Models\Images;
use Illuminate\View\View;
use Illuminate\Http\Request;

class CoachController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $coach = Coach::all();

        return view('admin/info-pages/coaches/coaches-management',[
            'coaches' => $coach
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create( $shift )
    {
        return view('admin/info-pages/coaches/add-coach',[
            'shift'=> $shift
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'position' => 'required',
            'type' => 'required',
            'description' => 'required',
            'achivement' => 'required',
        ]);

        if(request()->hasFile('image'))
        {
            $imagePath = $request->file('image')->store('programmes', 'public');
            
            $img = Images::create([
                'name' => $validated['name'],
                'use_for' => 'coach',
                'link' => $imagePath
            ]);
        }





        
    }

    /**
     * Display the specified resource.
     */
    public function show(Coach $coach)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Coach $coach)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Coach $coach)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Coach $coach)
    {
        //
    }
}
