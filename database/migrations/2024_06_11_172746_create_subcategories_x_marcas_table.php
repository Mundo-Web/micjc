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
        Schema::create('subcategories_x_marcas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('subcat_id');
            $table->unsignedBigInteger('marca_id');
            $table->timestamps();

            
            
            $table->foreign('subcat_id')->references('id')->on('sub_categorias')->onDelete('cascade');
            $table->foreign('marca_id')->references('id')->on('marcas')->onDelete('cascade');
            // Otros campos, si los hay
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subcategories_x_marcas');
    }
};
