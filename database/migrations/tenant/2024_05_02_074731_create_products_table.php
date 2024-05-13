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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id')->index();
            $table->unsignedBigInteger('qr_id')->index();
            $table->unsignedBigInteger('hsnsac_id')->index();
            $table->string('product_name')->nullable();
            $table->string('product_price')->nullable();
            $table->string('distributor_price')->nullable();
            $table->text('product_description')->nullable();
            $table->text('product_variant_options')->nullable();
            $table->string('product_image')->nullable();
            $table->string('product_coupon_image')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
