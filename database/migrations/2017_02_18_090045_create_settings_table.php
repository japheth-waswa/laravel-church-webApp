<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->text('website_name')->nullable();
            $table->text('logo_url')->nullable();
            $table->text('login_logo_url')->nullable();
            $table->text('fav_icon_url')->nullable();
            $table->text('page_menu_url')->nullable();
            $table->text('theme_title')->nullable();
            $table->text('theme_description')->nullable();
            $table->text('about_us')->nullable();
            $table->text('physical_address')->nullable();
            $table->text('primary_email')->nullable();
            $table->text('secondary_email')->nullable();
            $table->text('primary_phone')->nullable();
            $table->text('secondary_phone')->nullable();
            $table->text('facebook_url')->nullable();
            $table->text('twitter_url')->nullable();
            $table->text('youtube_url')->nullable();
            $table->text('quotation')->nullable();
            $table->text('quotation_origin')->nullable();
            $table->timestamps();
            $table->softDeletes();
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
}
