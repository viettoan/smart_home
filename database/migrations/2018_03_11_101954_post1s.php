<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Post1s extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post1s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 191);
            $table->string('description', 191);
            $table->string('content', 191);
            $table->integer('status');
            $table->integer('media_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('type');
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
        Schema::dropIfExists('post1s');
    }
}
