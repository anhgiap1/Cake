<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    use HasFactory;
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function products()
    {
        return $this->belongsToMany(Products::class, 'order_items', 'order_id', 'product_id');
    }

    public function order_Items()
    {
        return $this->hasMany(order_items::class);
    }

    public function promotions()
    {
        return $this->belongsToMany(promotions::class);
    }
}

