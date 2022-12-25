<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{

    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('user_id');
			$table->string('image');
			$table->string('caption');
			$table->integer('likes')->nullable();
			$table->string('comments')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');  
        });
    }


    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
