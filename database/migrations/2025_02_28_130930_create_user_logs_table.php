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
        Schema::create('user_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->nullable()->onDelete('cascade');
            $table->string('user_name',75);
            $table->string('tabla',100);
            $table->integer('table_id');
            $table->string('action',25);
            $table->string('columna',75)->nullable();
            $table->longText('old_value')->nullable();
            $table->longText('new_value')->nullable();
            $table->longText('observation');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_logs');
    }
};
