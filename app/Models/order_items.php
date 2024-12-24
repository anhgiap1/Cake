<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_items extends Model
{
    use HasFactory;
    public function orders()
    {
        return $this->belongsTo(Orders::class, 'order_id');
    }

    public function products()
    {
        return $this->belongsTo(products::class , 'product_id');
    }

    public function variants()
    {
        return $this->belongsTo(variants::class, 'variant_id');
    }
    public function users(){
        return $this->hasMany(User::class);
    }
}
