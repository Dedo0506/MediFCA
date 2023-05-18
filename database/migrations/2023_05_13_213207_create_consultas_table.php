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
        Schema::create('consultas', function (Blueprint $table) {
            $table->id();
            //$table->unsignedBigInteger('paciente_id');
            $table->dateTime('fecha_hora');
            $table->text('motivo');
            $table->text('exploracion_fisica');
            $table->string('diagnostico');
            $table->enum('ambulancia', ['S', 'N']);
            //$table->unsignedBigInteger('pers_med_id');
            $table->timestamps();

            //$table->foreign('paciente_id')->references('id')->on('pacientes');
            //$table->foreign('pers_med_id')->references('id')->on('personal_medico');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultas');
    }
};
