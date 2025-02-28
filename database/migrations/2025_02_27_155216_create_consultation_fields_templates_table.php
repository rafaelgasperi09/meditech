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
        Schema::create('consultation_fields_templates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type')->comment('MASTER , CLIENT , USER');
            $table->foreignId('client_id')->references('id')->on('clients')->nullable()->onDelete('cascade')->comment('Client owner if template type CLIENT');
            $table->foreignId('user_id')->references('id')->on('users')->nullable()->onDelete('cascade')->comment('User owner if template type USER');
            $table->foreignId('consultation_field_id')->references('id')->on('consultation_fields')->onDelete('cascade');
            $table->boolean('active')->default(1);
            $table->foreignId('medical_speciality_id')->references('id')->on('medical_specialties')->nullable()->onDelete('cascade');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultation_fields_templates');
    }
};
