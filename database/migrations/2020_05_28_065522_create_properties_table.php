<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        Schema::create('properties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('property_id')->nullable();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->string('status')->nullable();
            $table->string('address')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('type')->nullable();
            $table->text('description')->nullable();
            $table->string('price')->nullable();
            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();
            $table->string('image4')->nullable();
            $table->string('image5')->nullable();
            $table->string('image6')->nullable();
            $table->string('room_size')->nullable();
            $table->string('bath_size')->nullable();
            $table->string('bathrooms')->nullable();
            $table->string('toilets')->nullable();
            $table->string('bedrooms')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('properties');
    }
}
