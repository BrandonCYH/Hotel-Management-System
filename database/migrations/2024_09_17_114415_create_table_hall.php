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
        Schema::create('hall', function (Blueprint $table) {
            $table->id();
            $table->string('hall_id');
            $table->string('hall_name');
            $table->string('hall_description');
            $table->double("hall_price");
            $table->integer('hall_seat');
            $table->string('availability_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hall');
    }
};
