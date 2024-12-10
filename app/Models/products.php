<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;
    public function categories()
    {
        return $this->belongsTo(categories::class);
    }

    public function variants()
    {
        return $this->hasMany(variants::class);
    }

    public function order_Items()
    {
        return $this->hasMany(order_items::class);
    }

    public function comments()
    {
        return $this->hasMany(comments::class);
    }

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }
}
