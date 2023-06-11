<?php

namespace App\Http\Livewire;

use App\Models\Project;
use Livewire\Component;

class Portfolio extends Component
{
    public function render()
    {
        $projects = Project::orderByDesc('finished_at')->where('visible', true)->get();
        if($projects){
            foreach ($projects as $project){
                $skills = [];
                $tags = $project->tags()->get();
                if($tags->isNotEmpty()){
                    foreach ($tags as $tag){
                        $skills[] = $tag->name;
                    }
                }
                $project->skills = $skills;
            }
        }
        return view('livewire.portfolio', ['projects' => $projects]);
    }
}
