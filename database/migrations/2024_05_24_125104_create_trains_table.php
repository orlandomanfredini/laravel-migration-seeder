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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Company', 50);
            $table->string('Departure', 60);
            $table->string('Arrival', 60);
            $table->dateTime('Departure_time');
            $table->dateTime('Arrival_time');
            $table->string('Code_transport');
            $table->integer('Carriage');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
