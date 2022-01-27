<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('manufacturer_id');
            $table->string('name', 50);
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            // relations
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->cascadeOnUpdate()
                ->cascadeOnDelete()
            ;
            $table->foreign('manufacturer_id')
                ->references('id')
                ->on('manufacturers')
                ->cascadeOnUpdate()
                ->cascadeOnDelete()
            ;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
