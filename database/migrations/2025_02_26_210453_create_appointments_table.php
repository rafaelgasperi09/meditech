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
        Schema::create('appointments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('patient_id')->references('id')->on('patients')->onDelete('cascade');
            $table->foreignId('client_id')->references('id')->on('clients')->onDelete('cascade');
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('branch_id')->references('id')->on('branches')->onDelete('cascade');
            $table->foreignId('consulting_room_id')->references('id')->on('consulting_rooms')->onDelete('cascade');
            $table->foreignId('medical_specialty_id')->references('id')->on('medical_specialties')->onDelete('cascade');
            $table->string('status',35);
            $table->timestamp('start_date')->nullable();
            $table->timestamp('end_date')->nullable();
            $table->string('created_by_name',75)->nullable();
            $table->boolean('patient_arrived')->default(0);
            $table->boolean('patient_confirmation')->default(0);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
