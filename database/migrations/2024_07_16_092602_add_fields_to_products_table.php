<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToProductsTable extends Migration
{
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->text('description')->nullable();
            $table->string('shelf_life')->nullable();
            $table->string('product_code')->nullable();
            $table->string('pallet')->nullable();
            $table->string('packaging')->nullable();
            $table->text('detailed_description')->nullable();
        });
    }

    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn([
                'description',
                'shelf_life',
                'product_code',
                'pallet',
                'packaging',
                'detailed_description',
            ]);
        });
    }
}
