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
        Schema::create('room_type', function (Blueprint $table) {
            $table->string('room_type_id')->primary();
            $table->string('room_type_name');
            $table->integer('room_price');
            $table->string('room_description');
            $table->string('room_guest');
            $table->integer('room_bed');
            $table->integer('room_size');
            $table->integer('deposit');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_room_type');
    }
};
