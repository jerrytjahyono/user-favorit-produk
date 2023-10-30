<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function isOwned(Product $product){
        $product->update([
            'isOwned'=>(!$product['isOwned'])
        ]);
    }
}