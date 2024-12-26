<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    use HasFactory;
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function products()
    {
        return $this->belongsToMany(Products::class, 'order_items', 'order_id', 'product_id');
    }

    public function order_Items()
    {
        return $this->hasMany(order_items::class, 'order_id', 'id');
    }

    public function promotions()
    {
        return $this->belongsToMany(promotions::class);
    }
    public function variants(){
        return $this->hasMany(variants::class);
    }
}

