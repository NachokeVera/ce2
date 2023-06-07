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
        Schema::create('Propuestas', function (Blueprint $table) {
            $table->unsignedInteger('id')->autoIncrement();
            $table->string('documento',100)->nullable();
            $table->tinyInteger('estado')->default(0);
            $table->string('estudiantes_rut',10)->nullable();
            $table->foreign('estudiantes_rut')->references('rut')->on('Estudiantes');
            $table->date('fecha');

            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
        Schema::dropIfExists('propuestas');
    }
};
