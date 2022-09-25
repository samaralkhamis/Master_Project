<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrucksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {	

        Schema::create('trucks', function (Blueprint $table) {
            $table->bigIncrements('Truck_id');
            $table->string('TruckImg')->nullable();
            $table->string('Truck_Title')->nullable();
            $table->string('TruckDes')->nullable();
            $table->string('Dimention_L_W_H')->nullable();
            $table->string('Deck_height')->nullable();
            $table->string('Door_Opening')->nullable();
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
        Schema::dropIfExists('trucks');
    }
}
