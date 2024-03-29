<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTruckCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('truck_carts', function (Blueprint $table) {
            $table->bigIncrements('TCart_id')->nullable();
            $table->integer('Truck_id')->nullable();
            $table->integer('Order_id')->nullable();
            $table->integer('Quantity')->default('1');
            $table->string('TruckImg')->nullable();
            $table->float('Price')->nullable();
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
        Schema::dropIfExists('truck_carts');
    }
}
