<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->bigIncrements('Cart_id')->nullable();
            $table->integer('Product_id')->nullable();
            $table->integer('Truck_id')->nullable();
            $table->integer('Labor_id')->nullable();
            $table->integer('Order_id')->nullable();
            $table->integer('Quantity')->nullable();
            $table->string('productName')->nullable();
            $table->float('productPrice')->nullable();
            $table->string('productImg')->nullable();
            $table->string('TruckImg')->nullable();
            $table->float('Price')->nullable();
            $table->string('LaborFName')->nullable();
            $table->string('LaborLName')->nullable();
            $table->integer('is_done')->nullable();
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
        Schema::dropIfExists('carts');
    }
}
