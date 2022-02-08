<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttemptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attempts', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->foreignId("request_id")->references("id")->on("requests")->cascadeOnUpdate()->cascadeOnDelete();

            $table->boolean("live_place_status");
            $table->text("live_place_comment")->nullable();

            $table->boolean("name_status");
            $table->text("name_comment")->nullable();

            $table->boolean("IIN_status");
            $table->text("IIN_comment")->nullable();

            $table->boolean("education_status");
            $table->text("education_comment")->nullable();

            $table->boolean("car_license_status");
            $table->text("car_license_comment")->nullable();

            $table->boolean("experience_status");
            $table->text("experience_comment")->nullable();

            $table->boolean("army_service_status");
            $table->text("army_service_comment")->nullable();

            $table->boolean("army_year_status");
            $table->text("army_year_comment")->nullable();

            $table->boolean("army_section_status");
            $table->text("army_section_comment")->nullable();

            $table->boolean("position_status");
            $table->text("position_comment")->nullable();

            $table->boolean("rank_status");
            $table->text("rank_comment")->nullable();

            $table->boolean("vtsh_status");
            $table->text("vtsh_comment")->nullable();

            $table->boolean("branch_name_status");
            $table->text("branch_name_comment")->nullable();

            $table->boolean("year_service_status");
            $table->text("year_service_comment")->nullable();

            $table->boolean("wanted_position_status");
            $table->text("wanted_position_comment")->nullable();

            $table->boolean("contract_term_status");
            $table->text("contract_term_comment")->nullable();

            $table->boolean("region_status");
            $table->text("region_comment")->nullable();


            $table->boolean("phone_status");
            $table->text("phone_comment")->nullable();


            $table->boolean("email_status");
            $table->text("email_comment")->nullable();


            $table->boolean("photo_status");
            $table->text("photo_comment")->nullable();

            $table->boolean("card_id_status");
            $table->text("card_id_comment")->nullable();


            $table->boolean("autobiography_status");
            $table->text("autobiography_comment")->nullable();

            $table->boolean("diploma_status");
            $table->text("diploma_comment")->nullable();


            $table->boolean("declaration_status");
            $table->text("declaration_comment")->nullable();

            $table->boolean("workbook_status");
            $table->text("workbook_comment")->nullable();

            $table->boolean("millitary_id_status");
            $table->text("millitary_id_comment")->nullable();

            $table->boolean("anketa_status");
            $table->text("anketa_comment")->nullable();

            $table->text("comment")->nullable();

            $table->string("date");
            $table->string("checked_date")->nullable();
            $table->foreignId("current_step")->references("id")->on("steps")->cascadeOnDelete()->cascadeOnUpdate();
            $table->integer("status")->default(0);

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
        Schema::dropIfExists('attempts');
    }
}
