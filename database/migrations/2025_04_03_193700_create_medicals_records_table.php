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
        Schema::create('medicals_records', function (Blueprint $table) {
            $table->id();
            $table->foreignId('paciente_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('profissional_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('consulta_id')->constrained('consultas')->onDelete('cascade');
            $table->string('diagnostico')->nullable();
            $table->text('observacoes')->nullable();
            $table->text('prescricao')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicals_records');
    }
};
