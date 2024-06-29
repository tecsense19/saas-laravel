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
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->string('plan_title');
            $table->text('plan_description')->nullable();
            $table->string('plan_currency', 3); // Assuming currency is a 3-character code like USD, EUR
            $table->decimal('plan_month_price', 8, 2);
            $table->decimal('plan_year_price', 8, 2);
            $table->string('plan_month_text')->nullable();
            $table->string('plan_year_text')->nullable();
            $table->boolean('plan_status')->default(1); // Assuming status is a boolean (active/inactive)
            $table->string('button_string')->nullable();
            $table->timestamps(); // Includes created_at and updated_at
            $table->softDeletes(); // Includes deleted_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plans');
    }
};
