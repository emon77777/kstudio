<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting_info = Setting::first();
        return view("backend.pages.setting.index", compact('setting_info'));
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
        $validator = Validator::make(request()->all(), [
            'footer_short_text' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $setting_info = Setting::find($id);

        if (!empty($_FILES['brand_logo']['name'])) {
            $brand_logo_name = 'brand_logo_' . time() . '.' . pathinfo($_FILES['brand_logo']['name'], PATHINFO_EXTENSION);
            Storage::disk('public')->delete($setting_info->brand_logo);
            $logoImage = Storage::disk('public')->putFileAs('images', $request->file('brand_logo'), $brand_logo_name);
        } else {
            $logoImage = $setting_info->brand_logo;
        }

        if (!empty($_FILES['home_back_image']['name'])) {
            $home_back_image_name = 'about_photo_' . time() . '.' . pathinfo($_FILES['home_back_image']['name'], PATHINFO_EXTENSION);
            Storage::disk('public')->delete($setting_info->home_back_image);
            $homeBackImage = Storage::disk('public')->putFileAs('images', $request->file('home_back_image'), $home_back_image_name);
        } else {
            $homeBackImage = $setting_info->home_back_image;
        }

        if (!empty($_FILES['home_banner']['name'])) {
            $home_banner_name = 'home_banner_' . time() . '.' . pathinfo($_FILES['home_banner']['name'], PATHINFO_EXTENSION);
            Storage::disk('public')->delete($setting_info->home_banner);
            $homeBanner = Storage::disk('public')->putFileAs('banner', $request->file('home_banner'), $home_banner_name);
        } else {
            $homeBanner = $setting_info->home_banner;
        }

        if (!empty($_FILES['about_banner']['name'])) {
            $about_banner_name = 'about_banner_' . time() . '.' . pathinfo($_FILES['about_banner']['name'], PATHINFO_EXTENSION);
            Storage::disk('public')->delete($setting_info->about_banner);
            $aboutBanner = Storage::disk('public')->putFileAs('banner', $request->file('about_banner'), $about_banner_name);
        } else {
            $aboutBanner = $setting_info->about_banner;
        }

        if (!empty($_FILES['service_banner']['name'])) {
            $service_banner_name = 'service_banner_' . time() . '.' . pathinfo($_FILES['service_banner']['name'], PATHINFO_EXTENSION);
            Storage::disk('public')->delete($setting_info->service_banner);
            $serviceBanner = Storage::disk('public')->putFileAs('banner', $request->file('service_banner'), $service_banner_name);
        } else {
            $serviceBanner = $setting_info->service_banner;
        }

        if (!empty($_FILES['portfolio_banner']['name'])) {
            $portfolio_banner_name = 'portfolio_banner_' . time() . '.' . pathinfo($_FILES['portfolio_banner']['name'], PATHINFO_EXTENSION);
            Storage::disk('public')->delete($setting_info->portfolio_banner);
            $portfolioBanner = Storage::disk('public')->putFileAs('banner', $request->file('portfolio_banner'), $portfolio_banner_name);
        } else {
            $portfolioBanner = $setting_info->portfolio_banner;
        }

        if (!empty($_FILES['contact_banner']['name'])) {
            $contact_banner_name = 'contact_banner_' . time() . '.' . pathinfo($_FILES['contact_banner']['name'], PATHINFO_EXTENSION);
            Storage::disk('public')->delete($setting_info->contact_banner);
            $contactBanner = Storage::disk('public')->putFileAs('banner', $request->file('contact_banner'), $contact_banner_name);
        } else {
            $contactBanner = $setting_info->contact_banner;
        }

        $setting_info->update([
            'brand_logo' => $logoImage,
            'home_back_image' => $homeBackImage,
            'home_video' => $request->input('home_video'),
            'home_banner' => $homeBanner,
            'about_banner' => $aboutBanner,
            'service_banner' => $serviceBanner,
            'portfolio_banner' => $portfolioBanner,
            'contact_banner' => $contactBanner,
            'footer_short_text' => $request->input('footer_short_text'),
            'facebook' => $request->input('facebook'),
            'twitter' => $request->input('twitter'),
            'linkedin' => $request->input('linkedin'),
            'youtube' => $request->input('youtube')
        ]);
        return redirect()->route('admin.setting.index')->with('success', 'Setting Data Updated successfully');
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
