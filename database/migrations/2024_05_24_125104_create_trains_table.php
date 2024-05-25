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
            $table->string('company', 50);
            $table->string('departure', 60);
            $table->string('arrival', 60);
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->string('code_transport');
            $table->integer('carriage');
            $table->integer('margin_time');
            $table->boolean('cancelled')->default(false);
            
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
