<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSundaySchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sunday_schedules', function (Blueprint $table) {
            $table->increments('id');
            $table->text('theme_title')->nullable();
            $table->text('theme_description')->nullable();
            $table->timestamp('sunday_date')->nullable();
            $table->tinyInteger('column_count')->default(6);
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
        Schema::dropIfExists('sunday_schedules');
    }
}
