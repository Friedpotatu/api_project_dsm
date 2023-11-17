<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAreaSkills extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'area_skills_id',
    ];
}
