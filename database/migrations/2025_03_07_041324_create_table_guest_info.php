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
        Schema::create('guest_info', function (Blueprint $table) {
            $table->string("guest_id")->primary();
            $table->string("guest_name");
            $table->string("guest_email");
            $table->integer("guest_phoneNumber");
            $table->string("guest_country");
            $table->string("guest_city");
            $table->string("guest_specialRequest");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guest_info');
    }
};
