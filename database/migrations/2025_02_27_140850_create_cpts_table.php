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
        Schema::create('cpts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('description');
            $table->longText('description_es')->nullable();
            $table->string('code',15);
            $table->string('type',20)->comment('imagen , procedimiento , laboratorio');
            $table->foreignId('medical_speciality_id')->nullable()->references('id')->on('medical_specialties')->nullable()->onDelete('cascade');
            $table->boolean('duplicity')->default(0);
            $table->boolean('is_body')->default(0)->comment('Used to khown if this is printed on body image');
            $table->boolean('active')->default(1);
            $table->integer('cpt_area_id')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cpts');
    }
};
