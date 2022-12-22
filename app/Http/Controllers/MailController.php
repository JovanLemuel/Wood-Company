<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMailRequest;
use App\Http\Requests\UpdateMailRequest;
use App\Models\Mail;
use Illuminate\Http\Request;

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('search')) {
            return view('mail', [
                'mails' => Mail::where('mail_name', 'like', '%' . $request->search . '%')->orWhere('mail_email', 'like', '%' . $request->search . '%')->paginate(),
            ]);
        } else {
            return view('mail', [
                'mails' => Mail::paginate(3)
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
            'mail_name' => $request->mail_name,
            'mail_email' => $request->mail_email,
            'mail_message' => $request->mail_message
        ]);

        return redirect('/contact');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mail  $mail
     * @return \Illuminate\Http\Response
     */
    public function show(Mail $mail)
    {
        return view('admin_mail', [
            'pagetitle' => 'Mail',
            'mail' => $mail
        ]);
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
    public function destroy($id)
    {
        $mail = Mail::findOrFail($id);

        $mail->delete();

        // back() or redirect("/catalog")
        return back();
    }

    public function admin_mail()
    {
        return view('admin_mail', [
            'pagetitle' => 'Mail',
            'mails' => Mail::all()
        ]);
    }
}
