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
        Schema::create('patient_clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('patient_id')->references('id')->on('patients')->onDelete('cascade');
            $table->foreignId('client_id')->references('id')->on('clients')->onDelete('cascade');
            $table->softDeletes();
            $table->timestamps();
            $table->comment('Tabla que determina que pacientes puede ver un cliente , si otro lo registra no se crea nuevamente si no que se registra aqui en el nuevo cliente.');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient_clients');
    }
};
