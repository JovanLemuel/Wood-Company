<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMailRequest;
use App\Http\Requests\UpdateMailRequest;
use App\Models\Mail;

class MailController extends Controller
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
     * @param  \App\Http\Requests\StoreMailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMailRequest $request)
    {
        $this->validate($request, [
            'mail_name' => 'required|string|max:50',
            'mail_email' => 'required|email',
            'mail_message' => 'required|string|max:250',
        ]);

        Mail::create([
            'name' => $request->name,
            'description' => $request->description,
            'product_image' => $request->file('product_image')->store('productimage', 'public'),
            'supplier_id' => $request->supplier_id
        ]);

        return redirect('/catalog');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mail  $mail
     * @return \Illuminate\Http\Response
     */
    public function show(Mail $mail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mail  $mail
     * @return \Illuminate\Http\Response
     */
    public function edit(Mail $mail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMailRequest  $request
     * @param  \App\Models\Mail  $mail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMailRequest $request, Mail $mail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mail  $mail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mail $mail)
    {
        //
    }
}
