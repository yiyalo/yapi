<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Review;

class Product extends Model
{
    //To Make the value changeable or updateable
    protected $fillable = [
        'name', 'detail', 'year', ' price', 'discount'
    ];

    //Relationship of Product and Review
    public function reviews(){
        return $this->hasMany(Review::class);
    }

}
