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
        Schema::create('alergia_historia', function (Blueprint $table) {
            $table->foreignId('historia_id')->constrained()->onDelete('cascade');
            $table->foreignId('alergia_id')->constrained()->onDelete('cascade');
            $table->primary(['historia_id', 'alergia_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alergia_historia');
    }
};
