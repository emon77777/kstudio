<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->text('brand_logo')->nullable;
            $table->text('home_back_image')->nullable;
            $table->text('home_video')->nullable;
            $table->text('footer_short_text')->nullable;
            $table->text('home_banner')->nullable;
            $table->text('about_banner')->nullable;
            $table->text('service_banner')->nullable;
            $table->text('portfolio_banner')->nullable;
            $table->text('contact_banner')->nullable;
            $table->string('facebook')->nullable;
            $table->string('twitter')->nullable;
            $table->string('linkedin')->nullable;
            $table->string('youtube')->nullable;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
};
