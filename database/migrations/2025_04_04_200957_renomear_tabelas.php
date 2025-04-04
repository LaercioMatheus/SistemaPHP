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
        //
        Schema::rename('medicals_records', 'prontuarios');
        Schema::rename('specialties', 'especialidades');
        // Renomeação das tabelas
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::rename('prontuarios', 'medicals_records');
        Schema::rename('especialidades', 'specialties');
        // Reversão das renomeações
    }
};
