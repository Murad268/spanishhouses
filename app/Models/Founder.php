<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Founder extends Model
{
    public $table = 'founder';
    protected $guarded = [];
    use HasFactory;
}
