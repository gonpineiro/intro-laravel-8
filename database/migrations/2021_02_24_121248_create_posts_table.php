<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('course_id');

            $table->string('name');
            $table->boolean('free')->default(0);
            $table->string('image');
            $table->text('description');

            $table->timestamps();

            /* Relaciones */
            $table->foreign('course_id')->references('id')->on('courses');
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
