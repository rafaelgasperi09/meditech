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
        Schema::create('files', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('table_name',75)->comment('Nombre de la tabla relacionada');
            $table->integer('record_id')->comment('ID del tabla relacionada');
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade')->comment('Creador del registro');
            $table->string('path',100)->comment('Ruta del archivo');
            $table->string('name',50);
            $table->string('type',50)->nullable();
            $table->string('extention',5)->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('files');
    }
};
