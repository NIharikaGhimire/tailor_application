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
        Schema::create('personaldetails_measurements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('personal_details_id')->constrained('personal_details')->onDelete('cascade');
            $table->foreignId('measurement_details_id')->constrained('measurement_details')->onDelete('cascade');
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
        Schema::dropIfExists('personaldetails_measurements');
    }
};
