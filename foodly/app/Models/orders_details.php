<?php

namespace App\Models;

use App\Models\orders;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class orders_details extends Model
{
    protected  $fillable=["order_id","items_id","price","quantity"];
    public $timestamps=false;
    function order_table(){
        $this->belongsToMany(orders::class);
    }
}
