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
        Schema::create('consulting_rooms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('branch_id')->references('id')->on('branches')->onDelete('cascade');
            $table->string('name',100);
            $table->string('number',20)->nullable();
            $table->string('floor',45)->nullable();
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
        Schema::dropIfExists('consulting_rooms');
    }
};
