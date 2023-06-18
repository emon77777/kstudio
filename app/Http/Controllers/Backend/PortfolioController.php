<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view("backend.pages.portfolio.index", ['categories'=> $categories]);

    }

    /**
     * Fetch all portfolios.
     *
     * @return \Illuminate\Http\Response
     */
    public function fetchPortfolios(){
        $portfolios = Portfolio::with('category')->get();

        return array(
            'msg' => 'success',
            'data' => $portfolios
        );
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
        // validation rules
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'subTitle' => 'required',
            'category' => 'required', 
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'menu.*' => 'required',
        ]);

        // error message
        if ($validator->fails()) {
            return array(
                'errors' => $validator->errors(),
                'msg' => 'error'
            );
        }

        // validated inputs
        $validated = $validator->validated();

        // upload image
        $image = $request->file('image');
        $imageName = time().'_'. $image->getClientOriginalName();
        $image->move(public_path('uploads'), $imageName);

        
        $portfolio = new Portfolio();
        $portfolio->title = $validated['title'];
        $portfolio->subtitle = $validated['subTitle'];
        $portfolio->category_id = $validated['category'];
        $portfolio->description = $validated['description'];
        $portfolio->image = $imageName;
        $portfolio->menu = json_encode($validated['menu']);

        $portfolio->save();

        return array(
            'msg' => 'success'
        );
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
        $portfolio = Portfolio::find($id)->load('category');

        return array(
            'msg' => 'success',
            'portfolio' => $portfolio
        );
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
        // validation rules
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'subTitle' => 'required',
            'category' => 'required', 
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'menu.*' => 'required',
        ]);

        // error message
        if ($validator->fails()) {
            return array(
                'errors' => $validator->errors(),
                'msg' => 'error'
            );
        }

        // validated inputs
        $validated = $validator->validated();

        $portfolio = Portfolio::find($id);
        $portfolio->title = $validated['title'];
        $portfolio->subtitle = $validated['subTitle'];
        $portfolio->category_id = $validated['category'];
        $portfolio->description = $validated['description'];
        $portfolio->menu = json_encode($validated['menu']);

        // Update Image
        if($request->hasFile('image')){
            $image = $request->file('image');
            $imageName = time().'_'. $image->getClientOriginalName();
            $image->move(public_path('uploads'), $imageName);

            // remove previous file
            $filePath = 'uploads/'.$portfolio->image;
            if(file_exists($filePath)){
                unlink($filePath);
            }

            $portfolio->image = $imageName;
        }

        $portfolio->update();

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
        Portfolio::find($id)->delete();

        return array(
            'msg'=> 'success'
        );
    }
}
