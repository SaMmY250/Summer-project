<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::dropIfExists('services');

        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('services');
            $table->string('request_type');
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('vehicle_id');
            $table->timestamps();
        });

        /*
        ALTER TABLE services
        ADD CONSTRAINT customer_id
        FOREIGN KEY (id)
        REFERENCES users(id);
         */

        /*
       ALTER TABLE services
       ADD CONSTRAINT vehicle_id
       FOREIGN KEY (id)
       REFERENCES vehicle_detail(id);
        */
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
