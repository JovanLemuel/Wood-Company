<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePartnerRequest;
use App\Http\Requests\UpdatePartnerRequest;
use App\Models\Partner;

class PartnerController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePartnerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePartnerRequest $request)
    {
        $this->validate($request, [
            'partner_name' => 'required|string|max:50',
            'partner_location' => 'required|string|max:50',
            'partner_image' => 'required|image'
        ]);

        Partner::create([
            'partner_name' => $request->partner_name,
            'partner_location' => $request->partner_location,
            'partner_image' => $request->file('partner_image')->store('partnerimage', 'public')
        ]);

        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function show(Partner $partner)
    {
        return view('showpartner', [
            'pagetitle' => 'Partner',
            'partner' => $partner
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view("updatepartner", [
            "partner" => Partner::findOrFail($id),
            "pagetitle" => "Update Partner"
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePartnerRequest  $request
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePartnerRequest $request, $id)
    {
        $partner = Partner::findOrFail($id);

        if ($request->file('partner_image')) {
            unlink('storage/' . $partner->partner_image);
            $partner->update([
                "partner_name" => $request->partner_name,
                "partner_location" => $request->partner_location,
                "partner_image" => $request->file('partner_image')->store('partnerimage', 'public')
            ]);
        } else {
            $partner->update([
                "partner_name" => $request->partner_name,
                "partner_location" => $request->partner_location
            ]);
        }

        return redirect("/dashboard");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $partner = Partner::findOrFail($id);

        $partner->delete();

        // back() or redirect("/catalog")
        return redirect("/dashboard");
    }
}
