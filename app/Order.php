<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function orderitems () {
        return $this->hasMany('App\OrderItem');
    }

    public function user (){
        return $this->belongsTo('App\User');
    }
}
