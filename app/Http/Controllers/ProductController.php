<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Supplier;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('search')) {
            return view('catalog', [
                'products' => Product::where('name', 'like', '%' . $request->search . '%')->paginate(),
                // 'suppliers' => Supplier::whereRelation('product', 'name', 'like', '%' . $request->search . '%')->get()
            ]);
        } else {
            return view('catalog', [
                'products' => Product::paginate(3),
                // 'suppliers' => Supplier::paginate(3)
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createproduct', [
            'pagetitle' => "Create Product",
            'product' => Product::all(),
            'suppliers' => Supplier::all(),
            'categories' => Category::all()

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {

        /* $this->validate($request, [
            'name' => 'required|string|max:50',
            'description' => 'required|string|max:250',
            'product_image' => 'required|image',
            'supplier_id' => 'required'
        ]); */

        Product::create([
            'product' => Product::all(),
            'suppliers' => Supplier::all(),
            'name' => $request->name,
            'description' => $request->description,
            'product_image' => $request->file('product_image')->store('productimage', 'public'),
            'supplier_id' => $request->supplier_id,
            'category_id' => $request->category_id
        ]);

        return redirect('/dashboard/admin_product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        // $product->load('suppliers');

        return view('admin_product', [
            'pagetitle' => 'Product',
            'product' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view("updateproduct", [
            "product" => Product::findOrFail($id),
            "suppliers" => Supplier::all(),
            "categories" => Category::all()
        ]);

        return redirect('/dashboard/admin_product');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, $id)
    {
        $product = Product::findOrFail($id);

        if ($request->file('product_image')) {
            unlink('storage/' . $product->product_image);
            $product->update([
                "name" => $request->name,
                "description" => $request->description,
                "product_image" => $request->file('product_image')->store('productimage', 'public'),
                "supplier_id" => $request->supplier_id,
                "category_id" => $request->category_id
            ]);
        } else {
            $product->update([
                "name" => $request->name,
                "description" => $request->description,
                "supplier_id" => $request->supplier_id,
                "category_id" => $request->category_id
            ]);
        }

        return redirect("/dashboard/admin_product");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        $product->delete();

        return back();
        // return redirect("/dashboard");
    }

    public function admin_product()
    {
        return view('admin_product', [
            'pagetitle' => 'Product',
            'product' => Product::all(),
            'suppliers' => Supplier::all(),
            'categories' => Category::all()
        ]);
    }
}
