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
            $table->increments('id');
            $table->string('vehicle_type');
            $table->string('vehicle_name');
            $table->string('vehicle_lot_num');
            $table->string('services');
            $table->string('request_type');
            $table->unsignedInteger('customer_id');
            $table->timestamps();

            // $table->foreign('customer_id')->references('id')->on('customer_detail')->onDelete('set null');
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
