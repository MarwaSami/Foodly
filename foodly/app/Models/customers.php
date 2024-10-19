<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customers extends Model
{
    protected  $fillable=["name","email","phone","password","subscription"];
    use HasFactory;
    public $timestamps=false;
}
