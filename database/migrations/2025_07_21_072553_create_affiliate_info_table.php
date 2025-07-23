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
        Schema::create('affiliate_info', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('affiliate_registration_id');
            $table->string('akun_instagram')->nullable();
            $table->string('akun_tiktok')->nullable();
            $table->timestamps();
            
            $table->foreign('affiliate_registration_id')->references('id')->on('affiliate_registrations')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('affiliate_info');
    }
};
