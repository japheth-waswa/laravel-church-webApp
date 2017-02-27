<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->increments('id');
            $table->text('title')->nullable();
            $table->text('url_key')->nullable();
            $table->text('image_url')->nullable();
            $table->text('brief_description')->nullable();
            $table->text('content')->nullable();
            $table->text('author_name')->nullable();
            $table->timestamp('publish_date')->nullable();
            $table->integer('blog_category_id')->default(0);
            $table->integer('author_id')->default(0);
            $table->tinyInteger('visible')->default(1);
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
        Schema::dropIfExists('blogs');
    }
}
