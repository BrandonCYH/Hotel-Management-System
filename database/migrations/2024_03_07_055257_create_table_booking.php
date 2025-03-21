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
        Schema::create('room_booking', function (Blueprint $table) {
            $table->string('booking_id')->primary();
            $table->string('guest_id');
            $table->string("room_type_id");
            $table->string('room_id');
            $table->date('check_in_date');
            $table->date('check_out_date');
            $table->double('total_price');
            $table->string('booking_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('room_booking');
    }
};
