<?php

namespace App\Http\Livewire;

use App\Models\Experience;
use Livewire\Component;

class Work extends Component
{
    public function render()
    {
        return view('livewire.work', ['experiencies' => Experience::orderByDesc('start_at')->where('visible', true)->get()]);
    }
}
