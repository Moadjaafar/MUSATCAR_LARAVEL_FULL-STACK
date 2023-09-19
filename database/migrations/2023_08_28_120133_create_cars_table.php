<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('marke_id');
            $table->string('marke_name');
            $table->string('model');
            $table->integer('year');
            $table->string('color');
            $table->integer('price_per_day');
            $table->string('Seats_nbr');
            $table->string('Drive_type');
            $table->string('Transmission_type');
            $table->string('car_images_First');
            $table->string('availability');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
