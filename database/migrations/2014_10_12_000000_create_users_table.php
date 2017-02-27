<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('image_url')->nullable();
            $table->tinyInteger('role')->default(2);
            $table->tinyInteger('blocked')->default(0);
            $table->rememberToken();
            $table->timestamps();
        });
         $data = array(
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password' => bcrypt('admin123'),
            'role' => '1');
        App\User::create($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
