<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->foreignId("attempt_id")->references("id")->on("attempts")->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId("offer_id")->references("id")->on("offers")->cascadeOnDelete()->cascadeOnUpdate();
            $table->string("title",255);
            $table->text("contract_term");
            $table->integer("status")->default(0);
            $table->string("file");
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
        Schema::dropIfExists('contracts');
    }
}
