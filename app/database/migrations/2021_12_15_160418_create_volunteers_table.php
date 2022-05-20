<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVolunteersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volunteers', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("email");
            $table->string("residence_hostel_address");
            $table->string("university_or_institute");
            $table->string("degree");
            $table->double("whatsapp_no");
            $table->foreignId("state_id")->constrained('states');
            $table->foreignId("city_id")->constrained('cities');
            $table->string("interested_department");
            $table->string("profile_pic");
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
        Schema::dropIfExists('volunteers');
    }
}
