<?php

namespace App\Http\Controllers;

use App\DTO\ProductDTO;
use App\Models\Product;


class ProductController extends Controller
{
    public function getProducts(): ProductDTO
    {

        $product = new Product();

        return new ProductDTO(
            name: $product->getName()
        );
    }
}
