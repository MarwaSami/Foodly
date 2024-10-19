<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\categories;
use App\Models\sub_categories;
class ingredients extends Model
{
  protected  $fillable=["name","price","calories","categories_id","sub_categories_id"];
  public $timestamps=false;
    use HasFactory;
    public function categories()
    {
        return $this->belongsToMany(categories::class);
    }
    public function subcategories()
    {
        return $this->belongsTo(sub_categories::class,$foreignKey='sub_categories_id');
    }

}
