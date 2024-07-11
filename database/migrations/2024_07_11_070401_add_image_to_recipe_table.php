<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImageToRecipeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasColumn('recipe', 'image')) {
            Schema::table('recipe', function (Blueprint $table) {
                $table->string('image')->nullable()->after('detailed_info'); // image sütununu ekliyoruz
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('recipe', function (Blueprint $table) {
            $table->dropColumn('image'); // Geri alma işlemi
        });
    }
}
