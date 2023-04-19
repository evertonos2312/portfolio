<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.experiences.index', ['experiences' => Experience::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.experiences.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'string',
            'logo' => 'required',
            'start_at' => 'string',
        ]);

        $name = $request->file('logo')->hashName();
        $request->file('logo')->storeAs('public', $name);
        $date = date('Y-m-d', strtotime($validated['start_at']));
        $current = (bool)$request->input('current');
        $finished = null;
        if($current){
            $dateFinished = $request->input('finished_at') ?: null;
            if(!is_null($dateFinished)){
                $finished = date('Y-m-d', strtotime($dateFinished));
            }
        }

        Experience::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'logo' => $name,
            'start_at' => $date,
            'current' => $current,
            'finished_at' => $finished,
        ]);
        return redirect()->route('experiences.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
