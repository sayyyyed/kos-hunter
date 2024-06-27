<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('property_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('properti_id');
            $table->string('image_url');
            $table->timestamps();

            $table->foreign('properti_id')->references('id')->on('properti')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('property_images');
    }
};
