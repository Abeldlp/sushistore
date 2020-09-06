<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected static function boot(){
        parent::boot();

        static::created(
            function($user){
                $user->employee()->create([
                    'position' => 'Employee',
                    'profile_image' => '/images/noimage.png'
                ]);
            }
        );
    }

    public function orders (){
        return $this->hasMany('App\Order');
    }

    public function employee (){
        return $this->hasOne('App\Employee');
    }

    public function weeks (){
        return $this->hasMany('App\Shift');
    }
}
