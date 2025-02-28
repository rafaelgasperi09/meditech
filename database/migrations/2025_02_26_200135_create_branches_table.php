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
        Schema::create('branches', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('client_id')->references('id')->on('clients')->index()->onDelete('cascade');
            $table->string('name',100);
            $table->string('phone',20)->nullable();
            $table->string('address',100)->nullable();
            $table->string('type',50)->nullable()->comment('clinic , consulting room , hospital , etc ');
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
        Schema::dropIfExists('branches');
    }
};
