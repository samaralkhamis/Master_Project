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
            $table->string('productName');
            $table->float('productPrice');
            $table->string('productDescription');
            $table->string('productImg');
            $table->string('productCategory');
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
