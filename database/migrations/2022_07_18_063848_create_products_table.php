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

            $table->bigIncrements('product_id');
            $table->string('productName')->nullable();
            $table->float('productPrice')->nullable();
            $table->string('productDescription')->nullable();
            $table->string('productImg')->nullable();
            $table->string('productCategory')->nullable();
            $table->integer('isDeleted')->default('0');

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
        Schema::dropIfExists('products');
    }
}
