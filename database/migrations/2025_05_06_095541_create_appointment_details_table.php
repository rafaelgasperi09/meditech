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
        Schema::create('appointment_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->nullable()->onDelete('cascade');
            $table->foreignId('client_id')->references('id')->on('clients')->nullable()->onDelete('cascade');
            $table->foreignId('appointment_id')->references('id')->on('appointments')->nullable()->onDelete('cascade');
            $table->foreignId('consultation_data_id')->references('id')->on('consultation_data')->nullable()->onDelete('cascade');
            $table->foreignId('cpt_id')->references('id')->on('cpts')->nullable()->onDelete('cascade');
            $table->string('cpt_type',10);
            $table->string('cpt_code',10);
            $table->string('status',35);
            $table->decimal('amount')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('appointment_detail_status', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->nullable()->onDelete('cascade');
            $table->foreignId('client_id')->references('id')->on('clients')->nullable()->onDelete('cascade');
            $table->foreignId('appointment_id')->references('id')->on('appointments')->nullable()->onDelete('cascade');
            $table->foreignId('appointment_detail_id')->references('id')->on('appointment_details')->nullable()->onDelete('cascade');
            $table->string('status',35);
            $table->string('note',500)->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('appointment_detail_files', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->nullable()->onDelete('cascade');
            $table->foreignId('client_id')->references('id')->on('clients')->nullable()->onDelete('cascade');
            $table->foreignId('appointment_id')->references('id')->on('appointments')->nullable()->onDelete('cascade');
            $table->foreignId('appointment_detail_id')->references('id')->on('appointment_details')->nullable()->onDelete('cascade');
            $table->string('path',150);
            $table->string('status',35)->nullable();
            $table->string('note',500)->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointment_details');
        Schema::dropIfExists('appointment_detail_status');
        Schema::dropIfExists('appointment_detail_files');
    }
};
