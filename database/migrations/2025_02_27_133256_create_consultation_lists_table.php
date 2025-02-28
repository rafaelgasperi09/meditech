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
        Schema::create('consultation_lists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type',20);
            $table->string('value',100);
            $table->string('value_esp',100);
            $table->integer('order');
            $table->string('path_icon',75)->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultation_lists');
    }
};
