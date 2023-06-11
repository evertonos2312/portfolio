<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.projects.index', ['projects' => Project::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'url' => 'required',
            'skills' => 'string',
            'finished_at' => 'string',
            'description' => 'string',
            'image' => 'required'
        ]);

        $name = $request->file('image')->hashName();
        $request->file('image')->storeAs('public', $name);
        $date = date('Y-m-d', strtotime($validated['finished_at']));
        Project::create([
                'name' => $validated['name'],
                'url' => $validated['url'],
                'skills' => $validated['skills'],
                'finished_at' => $date,
                'description' => $validated['description'],
                'image' => $name
            ]);
        return redirect()->route('projects.index');
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
