<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Product;

class Review extends Model
{
    //Relationship of Product and Review
    public function product(){
        return $this->belongsTo(Product::class);                //Which mean each review only belongs to ONLY ONE product! No one review can't belongs to multiple product.
    }
}
