<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function images()
    {
        return $this->hasMany('App\Models\Image');
    }

    public function items()
    {
        return $this->hasMany('App\Models\OrderItem');
    }
}
