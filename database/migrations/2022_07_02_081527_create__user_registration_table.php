<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserRegistrationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('UserRegistrations', function (Blueprint $table) {
            $table->id();
            $table->string("Email");
            $table->string("Password");
            $table->string("Name");
            $table->string("MobileNo");
            $table->string("Country");
            $table->string("City");
            $table->string("UserType");
            $table->boolean("Agent");
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
        Schema::dropIfExists('UserRegistrations');
    }
}
