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
        Schema::create('historias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('abuelo_id')->unique(); // La clave es ->unique()
            $table->text('hist_Med');
            $table->text('otra');
            $table->text('observacion');
            $table->timestamps();

            // Definición de la llave foránea
            $table->foreign('abuelo_id')
                  ->references('id')
                  ->on('abuelos')
                  ->onDelete('cascade'); // Si se borra un abuelo, se borra su historia
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historias');
    }
};
