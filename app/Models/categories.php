<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class categories extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = "categories";
    protected $fillable = [
        'name'
    ];
    protected $dates = ['deleted_at'];
    public function products(){
        return $this->hasMany(products::class);
    }
}
