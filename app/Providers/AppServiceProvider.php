<?php

namespace App\Providers;

use App\Models\Amenity;
use App\Models\Service;
use App\Models\Setting;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $setting_data = Setting::first();
        $footer_service = Service::limit(6)->get();
        $footer_amenity = Amenity::limit(6)->get();

        View::share([
            'setting_data' => $setting_data,
            'footer_service' => $footer_service,
            'footer_amenity' => $footer_amenity,
        ]);
    }
}
