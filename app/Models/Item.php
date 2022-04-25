<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'unit_price',
        'image',
        'amount',
    ];

    function category(){
        return $this->belongsTo(Category::class);
    }

    function order(){
        return $this->belongsTo(Order::class);
    }
}
