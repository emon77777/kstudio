<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    /**
     * Display category index page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.pages.category.index');
    }

    /**
     * Response to a ajax get request.
     *
     * @return \Illuminate\Http\Response
     */
    public function fetchData(){
        $categories = Category::orderBy('id', 'desc')->get();
        return array(
            'msg' => 'success',
            'data' => $categories
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.category.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validation input
        $validatedData = $request->validate([
            'name' => 'required',
            'status' => 'required'
        ]);

        $category = new Category();
        $category->name = ucfirst($validatedData['name']);
        $category->status = $validatedData['status'];
        $category->save();
        
        return redirect()->route('admin.category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);

        return $category;
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
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'status' => 'required'
        ]);
 
        if ($validator->fails()) {
            return array(
                'errors' => $validator->errors(),
                'msg' => 'error'
            );
        }

        // validated inputs
        $validated = $validator->validated();

        $category = Category::find($id);
        $category->name = $validated['name'];
        $category->status = $validated['status'];
        $category->update();

        return array(
            'msg' => 'success'
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();

        return array('msg'=>'success');
    }
}
