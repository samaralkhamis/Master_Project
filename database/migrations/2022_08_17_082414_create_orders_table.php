<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('order_id')->nullable();
            $table->string('Name')->nullable();
            $table->integer('Phone')->nullable();
            $table->string('Email')->nullable();
            $table->string('Address')->nullable();
            $table->string('ProductName')->nullable();
            $table->double('ProductPrice')->nullable();
            $table->string('LaborFName')->nullable();
            $table->double('LaborPrice')->nullable();
            $table->string('Truck')->nullable();
            $table->double('TruckPrice')->nullable();
            $table->double('Total')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
