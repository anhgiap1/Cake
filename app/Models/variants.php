<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class variants extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'variants';
    protected $fillable = ['product_id','size','price'];
    public function products()
    {
        return $this->belongsTo(products::class);
    }
    protected $dates = ['deleted_at'];
}
