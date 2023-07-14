<?php

namespace App\Http\Controllers\Backend;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = Contact::first();
        
        return view("backend.pages.contact.index", compact(['contact']));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // // validate contact
        // $validatedData = $request->validate([
        //     'email' => 'required|email',
        //     'phone' => 'required|regex:/^[0-9]{11}$/',
        //     'address' => 'required|string|max:255',
        // ]);

        // // store contact
        // $contact = new Contact();
        // $contact->email = $validatedData['email'];
        // $contact->phone = $validatedData['phone'];
        // $contact->address = $validatedData['address'];
        // $contact->save();

        // return redirect('admin/contact');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    
        // validate contact
        $validatedData = $request->validate([
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'address' => 'required|string|max:255',
            'map' => 'required'
        ]);
        
        $email = $validatedData['email'];
        $phone = $validatedData['phone'];
        $address = $validatedData['address'];
        $map = $validatedData['map'];
        
        Contact::updateOrCreate(
            ['id'=> $id],
            ['email' => $email, 'phone'=> $phone, 'address' => $address, 'map' => $map]
        );

        return redirect('admin/contact');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = Contact::find($id);
        $contact->delete();
        return back();
    }
}
