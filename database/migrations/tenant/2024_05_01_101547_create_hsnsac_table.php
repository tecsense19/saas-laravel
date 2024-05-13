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
        Schema::create('hsnsac', function (Blueprint $table) {
            $table->id();
            $table->string('hsnsac_name');
            $table->string('hsnsac_value');
            $table->timestamps();
            $table->softDeletes(); // Add Soft Deletes
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hsnsac');
    }
};
