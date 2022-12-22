<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSupplierRequest;
use App\Http\Requests\UpdateSupplierRequest;
use App\Models\Supplier;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createsupplier', [
            'pagetitle' => "Create Supplier",
            'suppliers' => Supplier::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSupplierRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSupplierRequest $request)
    {
        Supplier::create([
            'suppliers' => Supplier::all(),
            'supplier_name' => $request->supplier_name,
            'phone' => $request->phone,
            'city' => $request->city
        ]);

        return redirect('/dashboard/admin_supplier');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $supplier)
    {
        return view('admin_supplier', [
            'pagetitle' => 'Supplier',
            'supplier' => $supplier
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
        return view("updatesupplier", [
            "supplier" => Supplier::findOrFail($id),
            "suppliers" => Supplier::all(),
        ]);

        return redirect('/dashboard/admin_supplier');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSupplierRequest  $request
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSupplierRequest $request, $id)
    {
        $supplier = Supplier::findOrFail($id);

            $supplier->update([
                "supplier_name" => $request->supplier_name,
                "phone" => $request->phone,
                "city" => $request->city,
            ]);

        return redirect("/dashboard/admin_supplier");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $supplier = Supplier::findOrFail($id);

        $supplier->delete();

        return back();
    }

    public function admin_supplier()
    {
        return view('admin_supplier', [
            'pagetitle' => 'Supplier',
            'suppliers' => Supplier::all()
        ]);
    }
}
