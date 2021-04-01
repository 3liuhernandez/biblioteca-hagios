<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\SubCategory;
/*
 * $category->sub_category
 * Category 1 - N sub_category
 */
class Category extends Model
{
    public function subcategories(){
        return $this->hasMany(SubCategory::class);
    }
}
