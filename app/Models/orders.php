<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    use HasFactory;
    public function users()
    {
        return $this->belongsTo(Users::class);
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

