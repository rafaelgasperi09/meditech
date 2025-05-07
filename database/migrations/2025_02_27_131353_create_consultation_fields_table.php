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
        Schema::create('consultation_fields', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',50);
            $table->string('label',255);
            $table->string('section',75)->nullable();
            $table->string('description',255)->nullable();
            $table->string('type',50)->comment('text , date , list , options , api , daterange , textarea ,etc');
            $table->string('sub_type',20)->default('consultation')->comment('consultation , form');
            $table->boolean('required')->default(0);
            $table->integer('order');
            $table->string('options',500)->nullable()->comment('Use to type=option , fill options separate by (,)');
            $table->string('list_type',20)->nullable()->comment('Related to column type of consultation_lists table');
            $table->string('api_path',75)->nullable()->comment('Route to api for get options , use api type');
            $table->string('icon',75)->nullable();
            $table->string('validation_type',20)->default('text')->comment('text , numeric , regex , etc');
            $table->boolean('rapid_access')->default(0);
            $table->integer('length')->nullable()->comment('Max length of caracters');
            $table->integer('width')->nullable();
            $table->boolean('need_diagnostic')->default(0)->comment('1 if this fields need a diagnostic id sustentation like cpts.');
            $table->boolean('need_msl')->default(0);
            $table->boolean('prefill_with_last')->default(0)->comment('1 if this field has to be prefilled with previus save data by the patient.');
            $table->boolean('ask_notes')->default(0);
            $table->boolean('ask_qty')->default(0);
            $table->boolean('ask_preoperative')->default(0);
            $table->boolean('has_susgestion')->default(0)->comment('1 if this filed have previus saved sugestion record.');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultation_fields');
    }
};
