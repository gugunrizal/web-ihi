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
        Schema::create('berita', function (Blueprint $table) {
            $table->id();
            $table->string('judul', 100);
            $table->string('penulis', 100);
            $table->date('tanggal_rilis');
            $table->string('slug', 100);
            $table->text('isi_berita');
            $table->text('ringkasan_berita');
            $table->string('gambar_berita', 100);
            $table->enum('status', ['draft', 'publish', 'archive']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berita');
    }
};
