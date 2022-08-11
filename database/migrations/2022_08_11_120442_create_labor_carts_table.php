<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaborCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('labor_carts', function (Blueprint $table) {
            $table->bigIncrements('LCart_id')->nullable();
            $table->integer('Labor_id')->nullable();
            $table->integer('Order_id')->nullable();
            $table->integer('quantity')->nullable();
            $table->string('LaborFName')->nullable();
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
        Schema::dropIfExists('labor_carts');
    }
}
