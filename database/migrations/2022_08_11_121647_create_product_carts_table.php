<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_carts', function (Blueprint $table) {
            $table->bigIncrements('PCart_id')->nullable();
            $table->integer('Product_id')->nullable();
            $table->integer('Order_id')->nullable();
            $table->integer('Quantity')->nullable();
            $table->string('productName')->nullable();
            $table->float('productPrice')->nullable();
            $table->string('productImg')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_carts');
    }
}
