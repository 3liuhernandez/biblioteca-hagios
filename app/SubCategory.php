<?php

namespace App;

use Illuminate\Database\Eloquent\Model;




class SubCategory extends Model
{
    /*
    * sub_category   ->  category
    * sub_category N - 1 category
    */
    /* public function category(){
        return $this->belongsTo(Category::class);
    } */

    /*
    * sub_category   ->  book
    * sub_category  N - 1 book
    */
    public function books(){
        return $this->hasMany(Book::class);
    }
}
