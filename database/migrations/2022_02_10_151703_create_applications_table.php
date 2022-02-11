<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->foreignId("user_id")->references("id")->on("users")->cascadeOnDelete()->cascadeOnUpdate();
            $table->string("name",255);
            $table->string("birthplace",255);
            $table->string("iin",255);
            $table->string("education",255);
            $table->string("car_licence",255);
            $table->string("experience",255);
            $table->string("army_service",255);
            $table->string("army_section_id",255)->nullable();
            $table->string("position",255)->nullable();
            $table->string("rank",255)->nullable();
            $table->string("vtsh",255);
            $table->string("branch_name",255)->nullable();
            $table->string("year_service",255)->nullable();
            $table->string("wanted_position",255);
            $table->string("contract_term",255);
            $table->string("region",255);
            $table->string("phone",255);
            $table->string("email",255);
            //Files
            $table->string("photo",255);
            $table->string("id_document",255);
            $table->string("autobiography",255);
            $table->string("diploma",255);
            $table->string("declaration",255);
            $table->string("work_book",255);
            $table->string("military_id",255);
            //Ankets
            $table->json("anketa")->nullable();
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
        Schema::dropIfExists('applications');
    }
}
