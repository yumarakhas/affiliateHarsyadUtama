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
        Schema::create('master_items', function (Blueprint $table) {
            $table->bigIncrements('item_id');
            $table->integer('category_id');
            $table->string('name_item')->nullable();
            $table->text('description_item')->nullable();
            $table->text('ingredient_item')->nullable();
            $table->string('netweight_item')->nullable();
            $table->text('contain_item')->nullable();
            $table->double('costprice_item')->nullable();
            $table->double('sell_price')->nullable();
            $table->integer('stock')->default(0);
            $table->string('unit_item', 50)->nullable();
            $table->timestamps();
            $table->softDeletes('deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('master_items');
    }
};
