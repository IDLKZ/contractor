<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('steps', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("title");
            $table->foreignId("next_step")->nullable()->references("id")->on("steps")->cascadeOnUpdate()->onDelete("set null");
            $table->foreignId("previous_step")->nullable()->references("id")->on("steps")->cascadeOnUpdate()->onDelete("set null");
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
        Schema::dropIfExists('steps');
    }
}
