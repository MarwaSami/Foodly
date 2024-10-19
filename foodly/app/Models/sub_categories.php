<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\categories;
use App\Models\ingredients;

class sub_categories extends Model
{
    use HasFactory;
           /**
                 * The roles that belong to the 2023_06_21_043514_create_sub_categories_table
                 *
                 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
                 */
                   // fillable
                protected $fillable=["name"];
               public $timestamps=false;
                public function categories()
                {
                    return $this->belongsToMany(categories::class);
                }
                public function ingredients()
                {
                    return $this->has(ingredients::class);
                }

}
