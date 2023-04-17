<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Language;
use App\Models\Profile;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function store( Request $request)
    {
        $request->validate([
           'name' => ['required', 'string'],
           'percent' => ['required']
        ]);
        $profile = Profile::first();

        Language::create([
            'profile_id'=> $profile->id,
           'name' => $request->name,
           'percent' => $request->percent
        ]);
        return redirect()->route('profile.create');
    }
}
