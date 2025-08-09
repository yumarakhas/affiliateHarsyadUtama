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
        Schema::table('affiliate_registrations', function (Blueprint $table) {
            // Mengubah enum status untuk menambahkan 'Pending' dan mengubah default
            $table->enum('status', ['Aktif', 'Nonaktif', 'Pending'])->default('Pending')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('affiliate_registrations', function (Blueprint $table) {
            // Rollback ke enum status lama
            $table->enum('status', ['Aktif', 'Nonaktif', 'Pending'])->default('Aktif')->change();
        });
    }
};
