<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCongregationsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('congregations', function (Blueprint $table) {
            $table->increments('id');
            $table->text('firstname')->nullable();
            $table->text('lastname')->nullable();
            $table->text('district')->nullable();
            $table->text('gender')->nullable();
            $table->text('date_of_birth')->nullable();
            $table->text('image_url')->nullable();
            $table->text('email')->nullable();
            $table->text('phone')->nullable();
            $table->text('place_of_stay')->nullable();
            $table->text('type')->nullable()->comment('adult,child');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('congregations');
    }

}
