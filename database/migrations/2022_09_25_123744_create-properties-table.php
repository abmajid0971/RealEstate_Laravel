<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string("Title");
            $table->string("Detail");
            $table->string("Price");
            $table->string("Location");
            $table->string("Kitchen");
            $table->string("Parking");
            $table->string("LivingRoom");
            $table->string("Bed");
            $table->string("Address");
            $table->string("Agent");
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
