<?php

namespace App\Http\Livewire\Admin;

use App\Models\Badge;
use Livewire\Component;

class BadgeShow extends Component
{
    public function render()
    {
        $badges = Badge::all();
        return view('livewire.admin.badge-show', ['badges' => $badges]);
    }
}
