<?php

namespace App\Models;

use Tymon\JWTAuth\Contracts\JWTSubject;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements JWTSubject
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username', // 'username' => 'required|string|max:255|unique:users',
        'name',
        'last_name',
        'email',
        'password',
        'pdf_path',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

    public function comments()
    {
        return $this->hasMany(Comments::class, 'user_id');
    }

    public function posts()
    {
        return $this->hasMany(Posts::class, 'user_id');
    }

    public function programmingLanguages()
    {
        return $this->belongsToMany(ProgrammingLanguages::class, 'user_programming_languages');
    }

    public function areaSkills()
    {
        return $this->belongsToMany(AreaSkills::class, 'user_area_skills');
    }

    public function softSkills()
    {
        return $this->belongsToMany(SoftSkills::class, 'user_soft_skills');
    }

}
