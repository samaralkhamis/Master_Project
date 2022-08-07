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
            $table->string('TruckDes');
            $table->float('Dimention_L*W*H');
            $table->float('Deck_height');
            $table->float('Door_Opening');
            $table->float('Price');
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
