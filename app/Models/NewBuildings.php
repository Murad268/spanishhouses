<?php

namespace App\Models;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewBuildings extends Model
{
    use HasSlug;
    public $table = 'new_buildings';
    protected $guarded = [];
    public function getSlugOptions() : SlugOptions
    {
    return SlugOptions::create()
    ->generateSlugsFrom('title')
    ->saveSlugsTo('slug');
    }
    public function products()
    {
        return $this->hasMany(Products::class, 'newbuildings_id', 'id');
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
