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
            $table->string('email');
            $table->string('nama_lengkap');
            $table->string('kontak_whatsapp');
            $table->string('kota_domisili');
            $table->string('akun_instagram')->nullable();
            $table->string('akun_tiktok')->nullable();
            $table->text('profesi_kesibukan');
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
