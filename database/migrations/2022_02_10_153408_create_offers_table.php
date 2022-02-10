<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->foreignId("application_id")->references("id")->on("applications")->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId("attempt_id")->references("id")->on("attempts")->cascadeOnUpdate()->cascadeOnDelete();
            $table->string("position",255);
            $table->string("army_section_id",255);
            $table->string("arrived_at",255);
            $table->text("comment")->nullable();
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
        Schema::dropIfExists('offers');
    }
}
