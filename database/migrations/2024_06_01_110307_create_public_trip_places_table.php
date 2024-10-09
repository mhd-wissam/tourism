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
        Schema::create('public_trip_places', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tourismPlaces_id');
            $table->foreign('tourismPlaces_id')->references('id')->on('tourism_places')->onDelete('cascade');
            $table->unsignedBigInteger('publicTrip_id');
            $table->foreign('publicTrip_id')->references('id')->on('public_trips')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('public_trip_places');
    }
};
