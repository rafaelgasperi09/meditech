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
        Schema::create('patients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name',50);
            $table->string('last_name',50);
            $table->string('id_type',15)->comment('EJ : cedula , pasaporte ,carnet de residencia');
            $table->string('id_number',25);
            $table->date('birthdate');
            $table->char('gender',2);
            $table->string('physical_address',100)->nullable();
            $table->string('billing_address',100)->nullable();
            $table->string('phone',20)->nullable();
            $table->string('whatsapp',20)->nullable();
            $table->string('email',50)->nullable();
            $table->string('status',25)->default('NORMAL');
            $table->boolean('retired',1)->default(0);
            $table->string('blood_type',10)->nullable();
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
        Schema::dropIfExists('patients');
    }
};
