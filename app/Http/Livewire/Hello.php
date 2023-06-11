<?php

namespace App\Http\Livewire;

use App\Models\Profile;
use Livewire\Component;

class Hello extends Component
{
    public function render()
    {
        return view('livewire.hello', ['profile' => Profile::first()]);
    }
}
