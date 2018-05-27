<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ProductCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return JSOn
     */
    public function toJson($request)
    {
        //return parent::$request->toJson(JSON_PRETTY_PRINT);
        $data = $request->all();
        $data = json_encode($data, true);
    }
}
