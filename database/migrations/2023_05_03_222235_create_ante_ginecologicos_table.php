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
        Schema::create('ante_ginecologicos', function (Blueprint $table) {
            $table->unsignedBigInteger('paciente_id')
                ->unique();
            $table->foreign('paciente_id')
                ->references('id')
                ->on('pacientes')
                ->onDelete('cascade');
            $table->char('aplica');
            $table->text('especificacion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ante_ginecologicos');
    }
};
