<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class products extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = "products";
    protected $fillable = [
        'name','image','categories_id'
    ];
    protected $dates = ['deleted_at'];

    public function categories()
    {
        return $this->belongsTo(categories::class);
    }

    public function variants()
    {
        return $this->hasMany(variants::class, 'variants');
    }
    public function orders()
    {
        return $this->belongsToMany(Orders::class, 'order_items', 'product_id', 'order_id');
    }

    public function order_Items()
    {
        return $this->hasMany(order_items::class, 'product_id');
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
