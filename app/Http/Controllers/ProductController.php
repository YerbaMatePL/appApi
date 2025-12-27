<?php

namespace App\Http\Controllers;

use App\DTO\ProductDTO;
use App\Models\Product;


class ProductController extends Controller
{
    public function getProducts(): array
    {

        $product = new Product();
        $dto = new ProductDTO(name: $product->getName());

        return [$dto];
    }
}
