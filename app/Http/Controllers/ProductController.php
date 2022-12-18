<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('index', [
            'products' => Product::all(),
        ]);
    }

    public function show(Product $product)
    {
        return view('showcatalog', [
            'product' => $product
        ]);
    }
}
