<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('search')) {
            return view('catalog', [
                'products' => Product::where('name', 'like', '%' . $request->search . '%')->orWhere('supplier_name', 'like', '%' . $request->search . '%')->paginate(),
                'suppliers' => Supplier::whereRelation('product', 'name', 'like', '%' . $request->search . '%')->get()
            ]);
        } else {
            return view('catalog', [
                'products' => Product::paginate(3),
                'suppliers' => Supplier::paginate(3)
            ]);
        }
    }

    public function show(Product $product)
    {
        return view('catalog', [
            'product' => $product
        ]);
    }
}
