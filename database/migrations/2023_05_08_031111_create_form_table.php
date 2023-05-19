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
        Schema::create('form_table', function (Blueprint $table) {
            $table->id();
            $table->string('vehicle_type');
            $table->string('owner_name');
            $table->string('owner_contact');
            $table->string('owner_email');
            $table->string('vehicle_name');
            $table->string('vehicle_lot_num');
            $table->string('services');
            $table->string('request_type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form');
    }
};
