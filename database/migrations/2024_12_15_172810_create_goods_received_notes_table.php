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
        Schema::create('goods_received_notes', function (Blueprint $table) {
            $table->id('GRNID');
            $table->dateTime('ReceivedTime');
            $table->foreignId('ProviderID')->constrained('providers','ProviderID')->onDelete('cascade');
            $table->foreignId('MedicineID')->constrained('medicines','MedicineID')->onDelete('cascade');
            $table->integer('UnitPrice');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('goods_received_notes');
    }
};