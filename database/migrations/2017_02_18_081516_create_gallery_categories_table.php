<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGalleryCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gallery_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->text('title')->nullable();
            $table->text('url_key')->nullable();
            $table->text('description')->nullable();
            $table->tinyInteger('visible')->default(1);
            $table->timestamps();
            $table->softDeletes();
        });
        
        $data = array(
            'title'=>'Slideshow',
            'url_key'=>'slideshow',
            'description' => 'brief info');
        App\Model\GalleryCategory::create($data);
        $data = array(
            'title'=>'Images',
            'url_key'=>'images',
            'description' => 'brief info');
        App\Model\GalleryCategory::create($data);
        $data = array(
            'title'=>'Links',
            'url_key'=>'links',
            'description' => 'brief info');
        App\Model\GalleryCategory::create($data);
        $data = array(
            'title'=>'Video',
            'url_key'=>'video',
            'description' => 'brief info');
        App\Model\GalleryCategory::create($data);
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gallery_categories');
    }
}
