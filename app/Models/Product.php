<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    // public $timesamps = false;

    protected $guarded = ['id'];

    function review() {
        return $this->hasMany(Review::class, 'id', 'product_id');
    }

    function receipt() {
        return $this->hasMany(Receipt::class, 'id', 'product_id');
    }
}
