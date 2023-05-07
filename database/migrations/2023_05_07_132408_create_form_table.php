<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('service_requests', function (Blueprint $table) {
            $table->id();
            $table->string('vehicle_type');
            $table->string('owner_name');
            $table->string('owner_contact');
            $table->string('owner_email');
            $table->string('vehicle_name');
            $table->string('vehicle_contact');
            $table->string('service_type');
            $table->string('request_type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_requests');
    }
};
