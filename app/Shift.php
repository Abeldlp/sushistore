<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    protected $fillable = ['monday', 'tuesday', 'wednesday', 'thursday', 'friday'];

    public function user(){
        return $this->belongsTo('App\User');
    }

}

