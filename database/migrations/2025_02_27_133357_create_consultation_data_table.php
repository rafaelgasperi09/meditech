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
        Schema::create('consultation_data', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('consultation_id')->references('id')->on('consultations')->onDelete('cascade');
            $table->foreignId('consultation_field_id')->references('id')->on('consultation_fields')->onDelete('cascade');
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade')->comment('Created BY');
            $table->longText('value')->nullable()->comment('value if no asociated table name data');
            $table->integer('record_id')->nullable()->comment('Id of the table name asociated data');
            $table->string('table_name')->nullable()->comment('Table name of asociated record_id data');
            $table->string('model_name')->nullable()->comment('Model name of asociated record_id data');
            $table->foreignId('diagnostic_id')->references('id')->on('diagnostics')->nullable()->onDelete('cascade')->comment('Diagnostic id if consultation_fields.need_diagnostic=1');
            $table->string('note',500)->nullable()->comment('Value if consultation_fields.ask_notes=1');
            $table->integer('qty')->nullable()->comment('Value if consultation_fields.ask_qty=1');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultation_data');
    }
};
