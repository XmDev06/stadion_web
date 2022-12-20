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
        Schema::create('qfy', function (Blueprint $table) {
            $table->id();
            $table->string('name');

            $table->unsignedBigInteger('tuman_id');
            $table->foreign('tuman_id')->references('id')->on('tumanlars');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('qfy');
    }
};
