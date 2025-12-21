<?php

namespace App\Http\Controllers;

use App\Models\Product;


class PageController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function products()

    {
        $product = new Product();
        $products = $product->getAllProducts();

        return view('products', ['products' => $products]);
    }
}
