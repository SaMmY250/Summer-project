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
        Schema::dropIfExists('vehicle_detail');

        Schema::create('vehicle_detail', function (Blueprint $table) {

            $table->increments('id');
            $table->string('vehicle_type');
            $table->string('vehicle_name');
            $table->string('vehicle_lot_num');
            $table->unsignedBigInteger('customer_id');
            $table->timestamps();
        });

        /*
        ALTER TABLE form_table
        ADD CONSTRAINT customer_id
        FOREIGN KEY (id)
        REFERENCES users(id);
         */

        /*
        ALTER TABLE users
        ADD CONSTRAINT role_name
        FOREIGN KEY (role_name)
        REFERENCES role(role_name);
         */
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form');
    }
};