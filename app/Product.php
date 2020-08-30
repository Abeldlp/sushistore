<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'price', 'image'];

    public function ordereditem(){
        return $this->hasOne('App\OrderItem');
    }
}
