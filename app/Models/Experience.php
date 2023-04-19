<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = [
       'title',
        'logo',
        'description',
        'start_at',
        'finished_at',
        'current'
    ];
}
