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
        Schema::create('billing', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("service_id");
            $table->string('price');
            $table->timestamps();
        });

        /*
        ALTER TABLE billing
        ADD CONSTRAINT service_id
        FOREIGN KEY (service_id)
        REFERENCES services(id);
         */
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('billing');
    }
};
