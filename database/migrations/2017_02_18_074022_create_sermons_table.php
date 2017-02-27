<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSermonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sermons', function (Blueprint $table) {
            $table->increments('id');
            $table->text('title')->nullable();
            $table->text('image_url')->nullable();
            $table->text('brief_description')->nullable();
            $table->text('audio_url')->nullable();
            $table->text('video_url')->nullable();
            $table->text('pdf_url')->nullable();
            $table->timestamp('sermon_date')->nullable();
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
        Schema::dropIfExists('sermons');
    }
}
