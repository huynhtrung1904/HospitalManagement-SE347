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
        Schema::create('invoice_prescriptions', function (Blueprint $table) {
            $table->id('InvoicePrescriptionID'); // Primary Key
            $table->foreignId('InvoiceID')->constrained('invoices', 'InvoiceID')->onDelete('cascade');
            $table->foreignId('PrescriptionID')->constrained('prescriptions', 'PrescriptionID')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice_prescriptions');
    }
};