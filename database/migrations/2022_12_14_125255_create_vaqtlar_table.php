<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vaqtlar', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('stadion_id');
            $table->foreign('stadion_id')->references('id')->on('stadions');

            $table->unsignedBigInteger('consumer');
            $table->foreign('consumer')->references('id')->on('stadions');

            $table->string('vaqt')->nullable();

            $table->string('kun')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vaqtlar');
    }
};
