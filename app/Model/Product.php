<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Review;

class Product extends Model
{
    //Relationship of Product and Review
    public function reviews(){
        return $this->hasMany(Review::class);
    }

}
