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
        Schema::create('rapid_access', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type',15)->comment('MASTER , CLIENT , USER');
            $table->foreignId('client_id')->nullable()->references('id')->on('clients')->nullable()->onDelete('cascade')->comment('Client Owner if type CLIENT');
            $table->foreignId('user_id')->nullable()->references('id')->on('users')->nullable()->onDelete('cascade')->comment('User Owner if type USER');
            $table->foreignId('consultation_field_id')->references('id')->on('consultation_fields')->onDelete('cascade');
            $table->foreignId('cpt_id')->references('id')->on('cpts')->onDelete('cascade');
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
        Schema::dropIfExists('rapid_access');
    }
};
