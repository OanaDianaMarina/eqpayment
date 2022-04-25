<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'group_name',
        'total_amount',
        'stauts',
    ];

    function user(){
        return $this->hasMany(User::class);
    }

    function item(){
        return $this->hasMany(Item::class);
    }
}
