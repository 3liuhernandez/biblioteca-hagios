<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    /*
    * book   ->  sub_category
    * book N - 1 sub_category
    */
    /* public function subcategories(){
        return $this->belongsTo(SubCategory::class);
    } */
}
