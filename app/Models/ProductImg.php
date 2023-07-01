<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImg extends Model
{
    protected $guarded =[];
    function product() {
        return $this->hasOne(Products::class, 'id', 'product_id');
    }
    use HasFactory;
}
