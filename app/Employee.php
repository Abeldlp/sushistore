<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['position', 'profile_image'];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
