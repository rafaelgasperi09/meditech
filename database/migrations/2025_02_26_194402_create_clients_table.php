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
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',100);
            $table->integer('group')->nullable()->comment('Column for group clients on one');
            $table->string('ruc',40)->nullable();
            $table->string('dv',4)->nullable()->comment('Digito Verificador');
            $table->string('long_name',100)->nullable();
            $table->string('email',50)->nullable();
            $table->string('whatsapp',50)->nullable();
            $table->boolean('active')->default(1);
            $table->string('image',75)->nullable();
            $table->string('logo',75)->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
