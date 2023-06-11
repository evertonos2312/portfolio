<?php

namespace App\Http\Livewire;

use App\Models\Language;
use App\Models\Profile;
use Livewire\Component;

class About extends Component
{
    public function render()
    {
        return view('livewire.about', ['profile' => Profile::first(), 'languages' => Language::orderBy('name')->get()]);
    }
}
