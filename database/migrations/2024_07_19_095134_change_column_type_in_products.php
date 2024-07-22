<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Geçici olarak sql_mode'u değiştirin
        DB::statement('SET SESSION sql_mode="NO_ENGINE_SUBSTITUTION";');

        Schema::table('products', function (Blueprint $table) {
            // Change column type
            $table->longText('detailed_description')->change();
        });

        // Orijinal sql_mode'u geri yükleyin
        DB::statement('SET SESSION sql_mode="STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION";');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            // Orijinal sütun türüne geri dönün
            $table->text('detailed_description')->change();
        });
    }
};
