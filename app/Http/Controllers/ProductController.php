<?php

namespace App\Http\Controllers;

use App\DTO\ProductResponse;
use App\Models\Product;

class ProductController extends Controller
{
    public function getProducts(): array
    {

        $product = new Product(name: 'Krasnalek123');
        $dto = new ProductResponse(name: $product->getName());
        return [$dto];
    }
}
