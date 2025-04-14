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
        Schema::create('appointments', function (Blueprint $table) {
            $table->bigIncrements('id');
            // Foreign keys: patient_id and professional_id should reference your 'users' and 'professionals' tables accordingly.
            $table->unsignedBigInteger('patient_id');
            $table->unsignedBigInteger('professional_id');
            $table->dateTime('start_time');  // Start time of the appointment.
            $table->dateTime('end_time')->nullable();  // End time (optional).
            $table->string('appointment_type')->nullable(); // E.g., routine, follow-up, emergency.
            $table->enum('status', ['Scheduled', 'Completed', 'Cancelled'])->default('Scheduled');
            $table->text('observations')->nullable();
            $table->timestamps();

            // Foreign key constraints (adjust table names as per your actual schema)
            $table->foreign('patient_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('professional_id')->references('id')->on('professionals')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
