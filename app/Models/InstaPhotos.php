<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstaPhotos extends Model
{
    protected  $table = "_insta__photos_";
    protected $guarded   = [];
    use HasFactory;
}
