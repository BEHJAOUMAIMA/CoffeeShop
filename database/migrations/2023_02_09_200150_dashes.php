<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dashes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image_path');
            $table->string('name');
            $table->integer('price');
            $table->string('category');
            $table->longText('description');
            $table->timestamps();
            $table->foreign('category')->references('id_category')->on('categories')->onDelete('cascade');
        });   
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
