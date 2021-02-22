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
            // Pro_name Pro_price Pro_image Cat_id(relations)

            $table->id();
            $table->string('Pro_name');
            $table->float('Pro_price');
            $table->string('Pro_image');
            $table->integer('cat_id')->unsigned();

            $table->timestamps();
            $table->foreign('cat_id')->references('cat_id')->on('categories')->onDelete('cascade');
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
