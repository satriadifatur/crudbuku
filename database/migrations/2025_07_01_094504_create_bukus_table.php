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
        if (!Schema::hasTable('bukus')) {
        Schema::create('bukus', function (Blueprint $table) {
            $table->id();
            $table->string('judul', 255);
            $table->string('pengarang', 100);
            $table->year('tahun_terbit');
            $table->foreignId('kategori_id')->constrained()->onUpdate('casecade')->onDelete('restrict');
            $table->foreignId('penerbit_id')->constrained()->onUpdate('casecade')->onDelete('restrict');
            $table->timestamps();
        });
    }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bukus');
    }
};
