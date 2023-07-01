<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasSlug;
    public $table = 'products';
    protected $guarded = [];
    public function getSlugOptions() : SlugOptions
    {
    return SlugOptions::create()
    ->generateSlugsFrom('products_title')
    ->saveSlugsTo('products_slug');
    }

    public function productsImgs()
    {
        return $this->hasMany(ProductImg::class, 'product_id', 'id');
    }
    public function district()
    {
        return $this->hasOne(District::class, 'id', 'products_district');
    }

    public function type()
    {
        return $this->hasOne(Building_Types::class, 'id', 'products_building_type');
    }
    public static function boot()
    {
        parent::boot();

        static::deleting(function ($district) {
            $district->productsImgs()->delete();
        });
    }
    use HasFactory;
}
