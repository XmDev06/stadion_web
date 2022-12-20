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
        Schema::create('stadions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->string('phone_2')->nullable();

            $table->bigInteger('narxi');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->unsignedBigInteger('viloyat_id');
            $table->foreign('viloyat_id')->references('id')->on('viloyatlars');

            $table->unsignedBigInteger('tuman_id');
            $table->foreign('tuman_id')->references('id')->on('tumanlars');

            $table->unsignedBigInteger('qfy_id');
            $table->foreign('qfy_id')->references('id')->on('qfy');

            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();

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
        Schema::dropIfExists('stadions');
    }
};
