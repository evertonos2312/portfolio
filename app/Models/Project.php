<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Tags\HasTags;

class Project extends Model
{
    use HasFactory;
    use HasTags;

    protected $fillable = [
        'name'  ,
        'url'  ,
        'skills',
        'finished_at',
        'description',
        'image',
        'visible'
    ];
}
