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
        // Membuat tabel 'users' di database
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Membuat kolom 'id' (auto-increment, primary key)
            
            $table->string('name'); // Membuat kolom 'name' bertipe string (varchar)
            
            $table->text('description'); // Membuat kolom 'description' bertipe text (untuk deskripsi panjang)
            
            $table->timestamps(); // Membuat kolom 'created_at' dan 'updated_at' (waktu otomatis saat data dibuat/diupdate)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Menghapus tabel 'users' jika rollback dijalankan
        Schema::dropIfExists('users');
    }
};
