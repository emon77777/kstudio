<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_feedback = Feedback::all();
        return view("backend.pages.feedback.index", compact(['all_feedback']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("backend.pages.feedback.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make(request()->all(), [
            'name' => 'required',
            'title' => 'required',
            'detail' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if (!empty($_FILES['image']['name'])) {
            $feedback_photo_name = 'feedback_photo_' . time() . '.' . pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
            $feedbackImage = Storage::disk('public')->putFileAs('feedback', $request->file('image'), $feedback_photo_name);
        } else {
            $feedbackImage = 'demo/demo_img.png';
        }

        Feedback::create([
            'image' => $feedbackImage,
            'name' => $request->input('name'),
            'title' => $request->input('title'),
            'detail' => $request->input('detail')
        ]);
        return redirect()->route('admin.feedback.index')->with('success', 'Feedback Created successfully');
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
        $feedback = Feedback::find($id);
        return view("backend.pages.feedback.edit", compact("feedback"));
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
        $validator = Validator::make(request()->all(), [
            'name' => 'required',
            'title' => 'required',
            'detail' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $feedback = Feedback::find($id);

        if (!empty($_FILES['image']['name'])) {
            $feedback_photo_name = 'feedback_photo_' . time() . '.' . pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
            Storage::disk('public')->delete($feedback->image);
            $feedbackImage = Storage::disk('public')->putFileAs('feedback', $request->file('image'), $feedback_photo_name);
        } else {
            $feedbackImage = $feedback->image;
        }

        $feedback->update([
            'image' => $feedbackImage,
            'name' => $request->input('name'),
            'title' => $request->input('title'),
            'detail' => $request->input('detail')
        ]);
        return redirect()->route('admin.feedback.index')->with('success', 'Feedback Created successfully');
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
