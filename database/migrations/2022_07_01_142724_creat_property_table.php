<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatPropertyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propertys', function (Blueprint $table) {
            $table->id();
            $table->string("Purpose");
            $table->string("PropertyType");
            $table->string("PropertySubType");
            $table->string("City");
            $table->string("Location");
            $table->string("PropertyTitle");
            $table->string("Description");
            $table->string("RentalPrice");
            $table->string("Price");
            $table->string("LandArea");
            $table->string("Unit");
            $table->string("Image");
            $table->string("Bedrooms");
            $table->string("Bathrooms");
            $table->string("ExpiresAfter");
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
        Schema::dropIfExists('propertys');
    }
}
