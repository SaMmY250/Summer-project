<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::dropIfExists('role');

        Schema::create('role', function (Blueprint $table) {
            $table->integer('role_number')->unique();
            $table->string('role_name')->primary()->unique()->nullable(false);
            $table->timestamps();
        });

        DB::table('role')->insert(
            array('role_number' => `580`, 'role_name' => "admin")
        );

        DB::table('role')->insert(
            array('role_number' => `137`, 'role_name' => "user")
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('role');
    }
};