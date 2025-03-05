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
        Schema::create('consultation_susgestions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type',15)->comment('MASTER , CLIENT , USER');
            $table->string('section',20)->comment('physical_examination , review_of_system');
            $table->foreignId('client_id')->nullable()->references('id')->on('clients')->nullable()->onDelete('cascade')->comment('Client Owner if type CLIENT');
            $table->foreignId('user_id')->nullable()->references('id')->on('users')->nullable()->onDelete('cascade')->comment('User Owner if type USER');
            $table->foreignId('consultation_field_id')->references('id')->on('consultation_fields')->onDelete('cascade');
            $table->string('answser',700);
            $table->string('answser_esp',700);
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
        Schema::dropIfExists('consultation_susgestions');
    }
};
