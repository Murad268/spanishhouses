<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Products;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasSlug;
    public $table = 'district';
    protected $guarded = [];

    function product() {
        return $this->hasMany(Products::class, 'product_id', 'id');
    }
    public function getSlugOptions() : SlugOptions
    {
    return SlugOptions::create()
    ->generateSlugsFrom('name')
    ->saveSlugsTo('slug');
    }
    public function products()
    {
        return $this->hasMany(Products::class, 'products_district', 'id');
    }
    public static function boot()
    {
        parent::boot();

        static::deleting(function ($district) {
            $district->products()->delete();
        });
    }
    use HasFactory;
}
