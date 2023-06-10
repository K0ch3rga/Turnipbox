<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $timesamps = false;

    function review() {
        return $this->hasMany(Review::class);
    }

    function receipt() {
        return $this->hasMany(Receipt::class);
    }
}
