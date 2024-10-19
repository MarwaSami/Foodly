<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Item extends Model
{
    protected $table = 'items'; 

    protected  $fillable=["name","price","categories_id","description","type"];
    public $timestamps=false;
    use HasFactory;
    public function categories()
    {
        return $this->belongsTo(categories::class,$foreignKey='categories_id');
    }
}

