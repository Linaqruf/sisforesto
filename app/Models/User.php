<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function pengguna()
    {
        return $this->hasOne(Pengguna::class);
    }

    // public function restoran()
    // {
    //     return $this->hasMany(restoran::class);
    // }

    public function review()
    {
        return $this->hasMany(Review::class);
    }

    public function reviewCafe()
    {
        return $this->hasMany(ReviewCafe::class);
    }
    
    public function getAvatar()
    {
            if(!$this->avatar){
                return asset('/storage/images/default.png');
            }

            return asset('/storage/images/'.$this->avatar);
    }
}
