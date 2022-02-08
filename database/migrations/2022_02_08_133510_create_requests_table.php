<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->foreignId("user_id")->references("id")->on("users")->cascadeOnDelete()->cascadeOnUpdate();
            $table->string("live_place",255);
            $table->string("name",255);
            $table->string("IIN");
            $table->string("education",255);
            $table->string("car_license",255);
            $table->string("experience",255);
            $table->string("army_service",255);
            $table->string("army_year",255);
            $table->string("army_section")->nullable();
            $table->string("position")->nullable();
            $table->string("rank")->nullable();
            $table->string("vtsh");
            $table->string("branch_name")->nullable();
            $table->string("year_service")->nullable();
            $table->string("wanted_position");
            $table->string("contract_term");
            $table->string("region");
            $table->string("phone");
            $table->string("email");
            $table->string("photo");
            $table->string("card_id");
            $table->string("autobiography");
            $table->string("diploma");
            $table->string("declaration");
            $table->string("workbook");
            $table->string("millitary_id");
            $table->json("anketa")->nullable();
            $table->string("date");
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
        Schema::dropIfExists('requests');
    }
}
