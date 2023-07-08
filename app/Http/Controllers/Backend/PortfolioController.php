<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
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
        $portfolio_data = Portfolio::all();
        $categories = Category::all();
        return view("backend.pages.portfolio.index", compact('portfolio_data', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('backend.pages.portfolio.create', compact('categories'));
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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // error message
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // upload image
        if (!empty($_FILES['image'])) {
            $portfolio_image_name = 'portfolio_image_' . time() . '.' . pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
            $portfolioImage = Storage::disk('public')->putFileAs('portfolio', $request->file('image'), $portfolio_image_name);
        } else {
            $portfolioImage = 'demo/demo_img.png';
        }

        Portfolio::create([
            'title' => $request->input('title'),
            'subtitle' => $request->input('subTitle'),
            'category_id' => $request->input('category'),
            'image' => $portfolioImage
        ]);

        return redirect()->route('admin.portfolio.index')->with('success', 'Portfolio data Created successfully');
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
        $categories = Category::all();
        $portfolio_data = Portfolio::find($id);
        return view('backend.pages.portfolio.edit', compact('portfolio_data', 'categories'));
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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // error message
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $portfolio = Portfolio::find($id);

        // update image
        if (!empty($_FILES['image'])) {
            $portfolio_image_name = 'portfolio_image_' . time() . '.' . pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
            Storage::disk('public')->delete($portfolio->image);
            $portfolioImage = Storage::disk('public')->putFileAs('portfolio', $request->file('image'), $portfolio_image_name);
        } else {
            $portfolioImage = $portfolio->image;
        }

        $portfolio->update([
            'title' => $request->input('title'),
            'subtitle' => $request->input('subTitle'),
            'category_id' => $request->input('category'),
            'image' => $portfolioImage
        ]);

        return redirect()->route('admin.portfolio.index')->with('success', 'Portfolio data Updated successfully');
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
