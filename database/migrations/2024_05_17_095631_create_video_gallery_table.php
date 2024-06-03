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
        Schema::create('video_gallery', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('short_description')->nullable();
            $table->text('full_description')->nullable();
            $table->enum('video_gallery_type', ['gallery', 'video'])->nullable();
            $table->enum('file_type', ['link', 'file'])->nullable();
            $table->string('file_url')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('video_gallery');
    }
};
