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
            $table->integer('Quantity')->nullable();
            $table->string('TruckImg')->nullable();
            $table->float('Price')->nullable();
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
