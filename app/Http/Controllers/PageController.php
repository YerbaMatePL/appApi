<?php

namespace App\Http\Controllers;

use App\DTO\ProductResponse;
use App\Models\Product;
use Illuminate\View\View;

class PageController extends Controller
{
    public function homeView(): View
    {
        return view(view: 'welcome');
    }

    public function productsView(): View

    {
        $product = new Product(name: 'Krasnalek90');
        $dto = new ProductResponse(name: $product->getName());

        return view(view: 'products', data: ['products' => [$dto]]);
    }
}
