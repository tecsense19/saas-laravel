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
        Schema::create('qr_points', function (Blueprint $table) {
            $table->id();
            $table->decimal('qr_amount', 10, 2); // Assuming qr_amount is a decimal field with precision 10 and scale 2
            $table->enum('qr_status', ['active', 'deactive'])->default('active'); // Assuming qr_status is an enum field with allowed values 'active' and 'deactive', defaulting to 'active'
            $table->timestamps();
            $table->softDeletes(); // Add Soft Deletes
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('qr_points');
    }
};
