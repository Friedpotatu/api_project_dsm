<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProgrammingLanguages extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'programming_languages_id',
    ];
}
