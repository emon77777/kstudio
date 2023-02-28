<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create([
            'image'      => 'about/about_photo_1687721105.png',
            'text'     => 'The Leading Real Estate Rental Marketplace.',
            'detail'  => 'dfxdhOver 39,000 people work for us in more than 70 countries all over the This breadth of global coverage, combined with specialist services

            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
            'created_at'  => '2023-06-26 01:23:31'
        ]);
    }
}
