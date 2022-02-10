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
            $table->foreignId("application_id")->references("id")->on("applications")->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId("step_id")->references("id")->on("steps")->cascadeOnUpdate()->cascadeOnDelete();
            $table->text("comment")->nullable();
            $table->integer("status")->default(0);
            $table->timestamp("published_date");
            $table->timestamp("validated_date");


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
