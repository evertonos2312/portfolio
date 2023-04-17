<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Badge;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
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
    public function create(Request $request)
    {
        $profile = Profile::first();
        return view('admin.profile.create', ['title' => 'Perfil', 'profile' => $profile]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function update(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
//            'image' => 'required',
            'secondary_email' => 'string',
            'linkedin_url' => 'string',
            'github_url' => 'string',
            'description' => 'string',
        ]);

//        $name = $request->file('image')->hashName();
//        $request->file('image')->storeAs('public', $name);
        Profile::updateOrCreate(
            ['email' => $validated['email']],
            [
                'name' => $validated['name'],
                'secondary_email' => $validated['secondary_email'],
                'linkedin_url' => $validated['linkedin_url'],
                'github_url' => $validated['github_url'],
                'description' => $validated['description'],
//                'image' => $name
            ]
            );

        return redirect()->route('profile.create');
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
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
