<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categories_sub_categories extends Model
{
    use HasFactory;
    protected $fillable=["bgimg"];
    public $timestamps=false;
}
