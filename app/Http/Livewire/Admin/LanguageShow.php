<?php

namespace App\Http\Livewire\Admin;

use App\Models\Language;
use Livewire\Component;

class LanguageShow extends Component
{
    public function render()
    {
        return view('livewire.admin.language-show', ['languages' => Language::all()]);
    }
}
