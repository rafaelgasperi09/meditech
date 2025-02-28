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
        Schema::create('patient_diagnostics', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('patient_id')->references('id')->on('patients')->onDelete('cascade');
            $table->foreignId('diagnostic_id')->references('id')->on('diagnostics')->onDelete('cascade');
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade')->comment('Created By');
            $table->boolean('active')->default(1);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient_diagnostics');
    }
};
