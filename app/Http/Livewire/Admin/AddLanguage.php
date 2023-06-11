<?php

namespace App\Http\Livewire\Admin;

use App\Models\Language;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class AddLanguage extends ModalComponent
{
    public Language $language;

    public function mount(Language $language)
    {
        $this->language = $language;
    }

    public function render()
    {
        return view('livewire.admin.add-language');
    }

    public function update()
    {
        $this->validate();
    }

    protected function rules()
    {
        return [
            'language.name' => ['required', 'string'],
            'language.percent' => ['required', 'string']
        ];
    }
}
