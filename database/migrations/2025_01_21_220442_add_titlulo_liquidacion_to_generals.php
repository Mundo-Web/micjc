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
        Schema::table('generals', function (Blueprint $table) {
            $table->longText('titulo_liquidacion')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('generals', function (Blueprint $table) {
            $table->dropColumn(['titulo_liquidacion']);
        });
    }
};
