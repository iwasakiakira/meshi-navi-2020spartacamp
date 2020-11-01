<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function rettaurants()
    {
        return $this->hasMany('App\Restaurant');
    }
}
