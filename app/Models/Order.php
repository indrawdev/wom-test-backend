<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function payment()
    {
        return $this->belongsTo('App\Models\Payment');
    }

    public function address()
    {
        return $this->belongsTo('App\Models\Address');
    }

    public function courier()
    {
        return $this->belongsTo('App\Models\Courier');
    }

    public function items()
    {
        return $this->hasMany('App\Models\OrderItem');
    }
}
