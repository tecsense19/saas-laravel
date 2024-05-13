<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['country', 'state', 'city']);
            $table->foreignId('country_id')->nullable()->after('remember_token')->constrained('countries');
            $table->foreignId('state_id')->nullable()->after('country_id')->constrained('states');
            $table->foreignId('city_id')->nullable()->after('state_id')->constrained('cities');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['country_id']);
            $table->dropForeign(['state_id']);
            $table->dropForeign(['city_id']);

            $table->dropColumn(['country_id', 'state_id', 'city_id']);
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
        });
    }
};
