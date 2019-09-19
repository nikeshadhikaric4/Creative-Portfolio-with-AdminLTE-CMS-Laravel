<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFashionVideoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fashion_video', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('fashion_category');
            $table->string('title');
            $table->string('slug');
            $table->text('description');
            $table->text('image')->nullable();
            $table->text('video_link')->nullable();
            $table->string('status')->default('active');
            $table->foreign('fashion_category')->references('id')->on('fashion_video_category')->onDelete('cascade');
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
        Schema::dropIfExists('fashion_video');
    }
}
