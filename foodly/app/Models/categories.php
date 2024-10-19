<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\sub_categories;
use App\Models\ingredients;
class categories extends Model
{

    use HasFactory;
    // fillable
    protected $fillable=["name"];
    public $timestamps=false;
    public function subcategories()
    {
        return $this->belongsToMany(sub_categories::class);
    }
    public function ingredients()
    {
        return $this->hasMany(ingredients::class);
    }
    public function items()
    {
        return $this->hasMany(items::class);
    }
}
