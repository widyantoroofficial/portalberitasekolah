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
        Schema::create('prestasis', function (Blueprint $table) {
            $table->id();
            $table->date('date');  // Menyimpan tanggal prestasi
            $table->string('name');  // Nama prestasi
            $table->text('description');  // Deskripsi prestasi
            $table->string('student_name');  // Nama siswa yang mendapatkan prestasi
            $table->string('image_path')->nullable();  // Lokasi gambar (opsional)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prestasis');
    }
};
