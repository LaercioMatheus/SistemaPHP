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
        Schema::create('professionals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');  // Full name of the professional.
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('specialty')->nullable();  // Area of expertise.
            $table->string('crm')->nullable();         // Registration number.
            $table->string('address')->nullable();
            $table->time('opening_hours_start')->nullable();
            $table->time('opening_hours_end')->nullable();
            $table->enum('weekday', ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday', 'Other'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('professionals');
    }
};
