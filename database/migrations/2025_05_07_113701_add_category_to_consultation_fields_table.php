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
        Schema::table('consultation_fields', function (Blueprint $table) {
            $table->string('category',50)->nullable();
            $table->foreignId('medical_speciality_id')->nullable()->references('id')->on('medical_specialties')->onDelete('cascade');
            $table->string('options_eng',500)->nullable();
            $table->string('description_eng',500)->nullable();
            $table->string('label_eng',255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('consultation_fields', function (Blueprint $table) {
            $table->dropColumn('category');
            $table->dropColumn('medical_speciality_id');
        });
    }
};
