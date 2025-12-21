<?php

namespace App\Http\Controllers;

use App\Models\Product;


class ProductController extends Controller
{
    public function getProducts(): string
    {

        $product = new Product();
        return $product->getAllProducts();
    }
}
