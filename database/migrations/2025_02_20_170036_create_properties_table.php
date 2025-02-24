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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('property_code');
            $table->string('property_type');
            $table->string('monthly_rent');
            $table->string('security_deposit');
            $table->string('property_size');
            $table->int('number_of_bedrooms');
            $table->int('number_of_bathrooms');
            $table->string('furnishing_status');
            $table->string('address');
            $table->string('status');
            $table->boolean('is_parking_available');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
