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
        Schema::create('patient_insurances', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('patient_id')->references('id')->on('patients')->onDelete('cascade');
            $table->foreignId('insurance_id')->references('id')->on('insurances')->onDelete('cascade');
            $table->string('policy_number',50)->nullable();
            $table->string('plan',50)->nullable();
            $table->string('copago',20)->nullable();
            $table->string('cetificate_number',75)->nullable();
            $table->date('date_of_issue')->nullable();
            $table->date('expire_at')->nullable();
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
        Schema::dropIfExists('patient_insurances');
    }
};
