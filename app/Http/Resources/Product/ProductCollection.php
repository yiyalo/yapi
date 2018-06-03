<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\Resource;

class ProductCollection extends Resource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::$request->toJson(JSON_PRETTY_PRINT);
        //NO GOOD CAUSE YOU SHOW ALL YOUR CARD
        //$data = $request->all();
        //$data = json_encode($data, true);

        //correct format
        //i don't know why my code won't work when i change the Resource to ResourceCollection.
        //I couldn't find any asnwer from the web now, so im gonna stick with the Resource at the moment
        
        return [
            'name' => $this->name,
            'discount' => $this->discount,
            'totalPrice' => round((1 - $this->discount / 100) * $this->price, 2),
            'rating' => $this->reviews->count() > 0 ? round($this->reviews->sum('rating')/$this->reviews->count(), 2) : 'No Rating Yet',
            'href' => [
                'linkToDetails' => route('products.show', $this->id)
            ]
        ];
        
    }
}
