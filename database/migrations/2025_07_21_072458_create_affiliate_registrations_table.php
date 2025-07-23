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
        Schema::create('affiliate_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('nama_lengkap');
            $table->string('kontak_whatsapp');
            $table->string('kota_domisili');
            $table->text('profesi_kesibukan');
            $table->text('info_darimana'); // Menyimpan pilihan info darimana sebagai string
            $table->text('yang_lain_text')->nullable(); // Untuk keterangan "Yang lain"
            $table->enum('status', ['Aktif', 'Nonaktif', 'Pending'])->default('Aktif');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('affiliate_registrations');
    }
};
