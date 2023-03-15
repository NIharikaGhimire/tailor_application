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
        Schema::create('measurement_details', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('personal_details_id')->constrained();
            // $table->string('name');
            // $table->integer('personal_details_id')->unsigned();
            $table->string('title');
            $table->timestamps();
            // $table->foreignId('personal_details_id')->references('id')->on('personal_details')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('measurement_details');
    }
};
