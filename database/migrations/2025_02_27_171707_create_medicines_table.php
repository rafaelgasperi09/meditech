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
        Schema::create('medicines', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('source')->default('FDA')->comment('FDA , CLIENT , USER');
            $table->string('ndc_code',15)->nullable();
            $table->string('home_name',100);
            $table->string('generic_name',100);
            $table->string('mgs',25);
            $table->string('mgs_type',10)->comment('ML ,MG , MCG , GM, UNITS');
            $table->string('type')->comment('BOTTLE, TABLETS , TUBE OF CREAM, SOLUTION, BOTTLE OF DROPS, BOTTLE OF SYRUP, VIAL, ETC');
            $table->decimal('price')->nullable();
            $table->string('product_type',100)->nullable();
            $table->string('usage_indications',4000)->nullable();
            $table->string('porpuse',4000)->nullable();
            $table->string('indication_and_usage',4000)->nullable();
            $table->boolean('narcotic')->default(0);
            $table->foreignId('client_id')->nullable()->references('id')->on('clients')->nullable()->onDelete('cascade')->comment('Client Owner if source CLIENT');
            $table->foreignId('user_id')->nullable()->references('id')->on('users')->nullable()->onDelete('cascade')->comment('User Owner if type USER');
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
        Schema::dropIfExists('medicines');
    }
};
