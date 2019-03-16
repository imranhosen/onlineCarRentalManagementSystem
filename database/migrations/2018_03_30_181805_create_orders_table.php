<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('location');
            $table->string('location-drop-off');
            $table->string('option1');
            $table->string('option2');
            $table->string('input-date');
            $table->string('input-time');
            $table->string('input-date-2');
            $table->string('input-time-2');
            $table->string('select-vehicle');
            $table->string('passengers');
            $table->string('luggage');
            $table->string('carseat');
            $table->string('first-name');
            $table->string('last-name');
            $table->string('mobile-number');
            $table->string('email', 150)->unique();
            $table->text('specialreguests');
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
