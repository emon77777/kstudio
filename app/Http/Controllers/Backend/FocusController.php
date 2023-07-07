<?php

namespace App\Http\Controllers\Backend;

use App\Models\Focus;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\For_;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class FocusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_focus = Focus::all();
        return view("backend.pages.focus.index", compact(['all_focus']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("backend.pages.focus.create");
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
            'icon' => 'required',
            'title' => 'required',
            'detail' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        if (!empty($_FILES['icon'])) {
            $focus_icon_name = 'focus_icon_' . time() . '.' . pathinfo($_FILES['icon']['name'], PATHINFO_EXTENSION);
            $focusIcon = Storage::disk('public')->putFileAs('focus', $request->file('icon'), $focus_icon_name);
        } else {
            $focusIcon = 'demo/demo_img.png';
        }

        Focus::create([
            'icon' => $focusIcon,
            'title' => $request->input('title'),
            'detail' => $request->input('detail')
        ]);
        return redirect()->route('admin.focus.index')->with('success', 'Focus data Created successfully');
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
        $focus = Focus::find($id);
        return view("backend.pages.focus.edit", compact("focus"));
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
            'icon' => 'required',
            'title' => 'required',
            'detail' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $focus = Focus::find($id);

        if (!empty($_FILES['icon']['name'])) {
            $focus_icon_name = 'focus_icon_' . time() . '.' . pathinfo($_FILES['icon']['name'], PATHINFO_EXTENSION);
            Storage::disk('public')->delete($focus->icon);
            $focusIcon = Storage::disk('public')->putFileAs('focus', $request->file('icon'), $focus_icon_name);
        } else {
            $focusIcon = $focus->icon;
        }

        $focus->update([
            'icon' => $focusIcon,
            'title' => $request->input('title'),
            'detail' => $request->input('detail')
        ]);
        return redirect()->route('admin.focus.index')->with('success', 'Focus data updated successfully');
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
