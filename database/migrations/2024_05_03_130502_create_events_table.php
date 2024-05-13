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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('event_uuid')->unique()->nullable();
            $table->string('event_title')->nullable();
            $table->text('sort_description')->nullable();
            $table->text('description')->nullable();
            $table->string('event_location')->nullable();
            $table->unsignedBigInteger('state_id')->index()->nullable();
            $table->unsignedBigInteger('city_id')->index()->nullable();
            $table->date('event_date')->nullable();
            $table->time('event_time')->nullable();
            $table->string('event_image')->nullable();
            $table->string('qr_code')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
