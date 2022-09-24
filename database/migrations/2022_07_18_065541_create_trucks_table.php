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
            $table->string('TruckImg');
            $table->string('Truck_Title');
            $table->string('TruckDes');
            $table->string('Dimention_L_W_H');
            $table->string('Deck_height');
            $table->string('Door_Opening');
            $table->float('Price');
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
