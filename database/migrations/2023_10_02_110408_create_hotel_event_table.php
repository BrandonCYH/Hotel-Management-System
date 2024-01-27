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
        Schema::create('hotel_event', function (Blueprint $table) {
            $table->id();
            $table->string('Promote_ID');
            $table->string('Photo', 300);
            $table->string('Room_Type');
            $table->integer('Original_Price');
            $table->integer('Promotion');
            $table->integer('Remaining');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotel_event');
    }
};