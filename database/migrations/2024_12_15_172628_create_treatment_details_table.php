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
        Schema::create('treatment_details', function (Blueprint $table) {
            $table->id('TreatmentDetailID'); // Primary Key
            $table->foreignId('TreatmentID')->constrained('treatments', 'TreatmentID')->onDelete('cascade');
            $table->integer('Price');
            $table->text('Result')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('treatment_details');
    }
};
