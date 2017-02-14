<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slides', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('page_id')->unsigned();
            $table->enum('type',['page','image-page','gallery'])->default('page');
            $table->text('text')->nullable();
            $table->string('image')->nullable();
            $table->string('gallery')->nullable();
            $table->string('background')->nullable();
            $table->timestamps();

            $table->foreign('page_id')
                ->references('id')->on('pages')
                ->onDelete('cascade');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('slides');
    }
}
