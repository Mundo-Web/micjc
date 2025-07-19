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
        Schema::table('products', function (Blueprint $table) {
            // Solo agregamos los campos que no existen
            if (!Schema::hasColumn('products', 'meta_title')) {
                $table->string('meta_title')->nullable();
            }
            if (!Schema::hasColumn('products', 'meta_description')) {
                $table->text('meta_description')->nullable();
            }
            if (!Schema::hasColumn('products', 'meta_keywords')) {
                $table->string('meta_keywords')->nullable();
            }
            if (!Schema::hasColumn('products', 'og_title')) {
                $table->string('og_title')->nullable();
            }
            if (!Schema::hasColumn('products', 'og_description')) {
                $table->text('og_description')->nullable();
            }
            if (!Schema::hasColumn('products', 'og_image')) {
                $table->string('og_image')->nullable();
            }
            if (!Schema::hasColumn('products', 'canonical_url')) {
                $table->string('canonical_url')->nullable();
            }
            if (!Schema::hasColumn('products', 'productos_relacionados')) {
                $table->json('productos_relacionados')->nullable()->comment('IDs de productos relacionados personalizados');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn([
                'meta_title',
                'meta_description', 
                'meta_keywords',
                'og_title',
                'og_description',
                'og_image',
                'canonical_url',
                'productos_relacionados',
            ]);
        });
    }
};
