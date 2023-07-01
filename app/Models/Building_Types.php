<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;

class Building_Types extends Model
{
    use HasSlug;
    public $table = 'building_types';
    protected $guarded = [];
    public function getSlugOptions() : SlugOptions
    {
    return SlugOptions::create()
    ->generateSlugsFrom('title')
    ->saveSlugsTo('slug');
    }
    public function products()
    {
        return $this->hasMany(Products::class, 'products_building_type', 'id');
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
