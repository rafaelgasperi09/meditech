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
        Schema::create('user_working_hours', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->nullable()->onDelete('cascade');
            $table->foreignId('client_id')->references('id')->on('clients')->nullable()->onDelete('cascade');
            $table->foreignId('consulting_room_id')->nullable()->references('id')->on('consulting_rooms')->onDelete('cascade');
            $table->foreignId('branch_id')->nullable()->references('id')->on('branches')->onDelete('cascade');
            $table->string('day_of_week'); // e.g., 'monday', 'tuesday'...
            $table->time('start_time');
            $table->time('end_time');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_working_hours');
    }
};
