<?php

namespace App\Http\Livewire;

use App\Models\Profile;
use Livewire\Component;

class Contact extends Component
{
    public function render()
    {
        return view('livewire.contact', ['profile' => Profile::first()]);
    }
}
