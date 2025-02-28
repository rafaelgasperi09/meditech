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
        Schema::create('consultations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('patient_id')->references('id')->on('patients')->references('id')->on('patients')->onDelete('cascade');
            $table->foreignId('appointment_id')->references('id')->on('appointments')->references('id')->on('appointments')->onDelete('cascade');
            $table->foreignId('client_id')->references('id')->on('clients')->references('id')->on('clients')->onDelete('cascade');
            $table->string('status',35)->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultations');
    }
};
