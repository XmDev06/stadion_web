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
        Schema::create('tumanlars', function (Blueprint $table) {
            $table->id();
            $table->string('name');

            $table->unsignedBigInteger('viloyat_id');
            $table->foreign('viloyat_id')->references('id')->on('viloyatlars');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tumanlars');
    }
};
