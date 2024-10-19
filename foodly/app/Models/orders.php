<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    use HasFactory;
    protected $fillable = ["cust_id", "price"];
    public $timestamps = false;
    use HasFactory;
    function orderdetails(){
        $this->hasMany(orders_details::class);
    }
}
