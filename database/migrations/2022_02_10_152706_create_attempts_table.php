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
            $table->text("accepted_comment")->nullable();
            $table->text("checked_comment")->nullable();
            $table->text("offered_comment")->nullable();
            $table->text("signed_comment")->nullable();

            $table->timestamp("published_date")->nullable();
            $table->timestamp("validated_date")->nullable();
            $table->timestamp("accepted_date")->nullable();
            $table->timestamp("checked_date")->nullable();
            $table->timestamp("offered_date")->nullable();
            $table->timestamp("signed_date")->nullable();

            $table->integer("status")->default(0);
            $table->integer("accepted_status")->default(0);
            $table->integer("checked_status")->default(0);
            $table->integer("offered_status")->default(0);
            $table->integer("signed_status")->default(0);

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
