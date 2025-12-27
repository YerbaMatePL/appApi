<?php

namespace App\Http\Controllers;

use App\DTO\ProductDTO;
use App\Models\Product;
use Illuminate\View\View;

class PageController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function products(): View

    {
        $product = new Product();
        $dto = new ProductDto(name: $product->getName());

        return view(view: 'products', data: ['products' => [$dto]]);
    }
}
