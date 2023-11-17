<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSoftSkills extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'soft_skills_id',
    ];
}
