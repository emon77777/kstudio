<?php

namespace App\Http\Controllers\Frontend;

use App\Models\About;
use App\Models\Focus;
use App\Models\Amenity;
use App\Models\Contact;
use App\Models\Setting;
use App\Models\Feedback;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about_data = About::first();
        $amenity_data = Amenity::get();
        $focus_data = Focus::limit(3)->get();
        $feedback_data = Feedback::all();
        $footer_data = Setting::select('footer_short_text', 'facebook', 'twitter', 'linkedin', 'youtube')->first();
        $contact_data = Contact::first();
        return view('frontend.pages.home.index', compact(['about_data', 'amenity_data', 'focus_data', 'feedback_data', 'footer_data', 'contact_data']));
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
